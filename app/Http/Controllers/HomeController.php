<?php

namespace App\Http\Controllers;

use App\Message;
use Illuminate\Http\Request;
use DB;
use notify;
use Illuminate\Support\Facades\Auth;
use Pusher\Pusher;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function profile()
    {
        return view('profile');
    }

    public function account($id)
    {
        if(Auth::id() == $id)
            return redirect('/profile');
        
        $user = DB::table('users')->where('uid',$id)->first();
        $code = 3;
        if(DB::table('friend_reqs')->where([['from',Auth::id()],['to',$id]])->exists())
        {
            $freq_sent = DB::table('friend_reqs')->where([['from',Auth::id()],['to',$id]])->first();
            if($freq_sent->accepted)
            {
                $code = 2;
            }
            else{
                $code = 0;
            }
        }
        if(DB::table('friend_reqs')->where([['to',Auth::id()],['from',$id]])->exists())
        {
            $freq_got = DB::table('friend_reqs')->where([['to',Auth::id()],['from',$id]])->first();
            if($freq_got->accepted)
            {
                $code = 2;
            }
            else{
                $code = 1;
            }
        }
        
        return view('account',compact('user','code'));
    }

    function fetch(Request $request)
    {
        if ($request->get('term')) {
            $query = $request->get('term');
            $data = DB::table('users')->where('name', 'LIKE', "%{$query}%")->get();
            
            
            if($data->isEmpty())
            {
               // echo "TRUE";
                echo json_encode([array("value"=> "#","label"=>"No result found")]);
                exit;
            }
            $response = array();
            foreach ($data as $dat) {
                $response[] = array("value" => $dat->uid, "label" => $dat->name);
            }

            
            echo json_encode($response);
            
        }
    }

    function send_freq(Request $request)
    {
        $succ = DB::table('friend_reqs')->updateOrInsert(['from' => $request->from, 'to' => $request->to]);
        if($succ)
        {
            echo json_encode("success");
        }
        else
        {
            echo json_encode("failed");

        }
    }

    function accept_freq(Request $request)
    {
        $suc = DB::table('friend_reqs')->where([['to',$request->to],['from',$request->from]])->update(['accepted' => 1]);
        if($suc)
        {
            echo json_encode("success");
        }
        else
        {
            echo json_encode("failed");

        }
    }

    public function messanger()
    {
        // select all users except logged in user
        // $users = User::where('id', '!=', Auth::id())->get();

        // count how many message are unread from the selected user
        $users = DB::select("select users.uid, users.name, users.pro_pic , users.email, count(is_read) as unread 
        from users LEFT  JOIN  messages ON users.uid = messages.from and is_read = 0 and messages.to = " . Auth::id() . "
        where users.uid != " . Auth::id() . " 
        group by users.uid, users.name, users.pro_pic, users.email");

        return view('messanger', ['users' => $users]);
    }

    public function getMessage($user_id)
    {
        $my_id = Auth::id();

        // Make read all unread message
        Message::where(['from' => $user_id, 'to' => $my_id])->update(['is_read' => 1]);

        // Get all message from selected user
        $messages = Message::where(function ($query) use ($user_id, $my_id) {
            $query->where('from', $user_id)->where('to', $my_id);
        })->oRwhere(function ($query) use ($user_id, $my_id) {
            $query->where('from', $my_id)->where('to', $user_id);
        })->get();

        return view('messages.index', ['messages' => $messages]);
    }

    public function sendMessage(Request $request)
    {
        $from = Auth::id();
        $to = $request->receiver_id;
        $message = $request->message;

        $data = new Message();
        $data->from = $from;
        $data->to = $to;
        $data->message = $message;
        $data->is_read = 0; // message will be unread when sending message
        $data->save();

        // pusher
        $options = array(
            'cluster' => 'ap2',
            'useTLS' => true
        );

        $pusher = new Pusher(
            env('PUSHER_APP_KEY'),
            env('PUSHER_APP_SECRET'),
            env('PUSHER_APP_ID'),
            $options
        );

        $data = ['from' => $from, 'to' => $to, 'fname' => Auth::user()->name,'message'=>$message]; // sending from and to user id when pressed enter
        $pusher->trigger('my-channel', 'my-event', $data);
       
    }
}
