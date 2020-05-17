@extends('layouts.all_pages')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-11">
            <div id="cover-pic-div">
                <h4 id="pro-name">{{$user->name}}</h4>
                <img id="cover-pic" src="@if($user->cover_pic  == NULL){{ asset('img/main.png') }}@else {{asset('img/'. str_replace(' ', '_', strtolower($user->name)).'/'.$user->cover_pic)}} @endif" class="" alt="Cover pic">
                <div id="pro-pic-div">
                    <img src="@if($user->pro_pic  == NULL){{ asset('img/main.png') }}@else {{asset('img/'. str_replace(' ', '_', strtolower($user->name)).'/'.$user->pro_pic)}} @endif" alt="..." class="rounded-circle bottom-left">
                    
                </div>
                <div class="bottom-right d-inline">
                    <button type="button" class="btn btn-secondary btn-sm" id="send_frnd_req">
                        @if($code == 3)
                        <i class="fas fa-user-plus"></i> Add Friend
                        @elseif($code == 1)
                        <i class="fas fa-user-plus"></i> Accept Friend Request
                        @elseif($code == 0)
                        <i class="fas fa-user-plus"></i> Friend Request Sent
                        @else
                        <i class="fas fa-check"></i> Friends
                        @endif
                    </button>

                    <button type="button" @if($code !=2) style="display: none;" @endif class="btn btn-secondary btn-sm" id="msg_btn"><i class="fab fa-facebook-messenger"></i> Message</button>


                </div>
            </div>
            <div class="card text-center border-top-0 border-fb-col">
                <div class="card-body p-0">

                    <div class="row justify-content-center">

                        <div class="col-auto  border-right border-left border-fb-col  py-2 px-3">
                            <div class="mx-4">
                                Timeline
                            </div>
                        </div>
                        <div class="col-auto border-right  border-fb-col p-2">
                            <div class="mx-4">
                                About
                            </div>
                        </div>
                        <div class="col-auto  border-right  border-fb-col p-2">
                            <div class="mx-4">
                                Friends
                            </div>
                        </div>
                        <div class="col-auto  border-right  border-fb-col p-2">
                            <div class="mx-4">
                                Photos
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container mt-3">
    <div class="row">
        <div class="col-5">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-auto">
                            <i class="fas fa-globe-americas border-fb-col"></i>
                            <h6 class="d-inline"> Intro</h6>
                        </div>
                    </div>
                    <div class="row justify-content-center my-2">
                        <div class="col-auto text-center">
                            <div> Get vector icons and social logos on your website with Font Awesome, the web's most popular icon set and toolkit. </div>
                        </div>
                    </div>
                    <div class="dropdown-divider"></div>
                    <div class="row mb-3">
                        <div class="col-auto">
                            <i class="fas fa-briefcase"></i>
                            <div class="d-inline"> Work Place</div>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-auto">
                            <i class="fas fa-graduation-cap"></i>
                            <div class="d-inline"> Study</div>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-auto">
                            <i class="fas fa-calendar-alt"></i>
                            <div class="d-inline"> Date of Birth</div>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-auto">
                            <i class="fas fa-venus-mars"></i>
                            <div class="d-inline"> Gender</div>
                        </div>
                    </div>
                    <button type="button" class="btn btn-secondary btn-sm btn-block">Edit Details</button>
                </div>
            </div>

            <div class="card mt-2">
                <div class="card-body">
                    <div class="row">
                        <div class="col-auto">
                            <i class="fas fa-image" style="color: #a5d950;"></i>
                            <h6 class="d-inline"> Photos</h6>
                        </div>
                    </div>
                    <div class="row mt-2">
                        <div class="col">
                            <div class="grid">
                                <div><img id="cover-pic" src="{{ asset('img/main.png') }}" class="" alt="Cover pic"></div>
                                <div><img id="cover-pic" src="{{ asset('img/main.png') }}" class="" alt="Cover pic"></div>
                                <div><img id="cover-pic" src="{{ asset('img/main.png') }}" class="" alt="Cover pic"></div>
                                <div><img id="cover-pic" src="{{ asset('img/main.png') }}" class="" alt="Cover pic"></div>
                                <div><img id="cover-pic" src="{{ asset('img/main.png') }}" class="" alt="Cover pic"></div>
                                <div><img id="cover-pic" src="{{ asset('img/main.png') }}" class="" alt="Cover pic"></div>
                                <div><img id="cover-pic" src="{{ asset('img/main.png') }}" class="" alt="Cover pic"></div>
                                <div><img id="cover-pic" src="{{ asset('img/main.png') }}" class="" alt="Cover pic"></div>
                                <div><img id="cover-pic" src="{{ asset('img/main.png') }}" class="" alt="Cover pic"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="card mt-2">
                <div class="card-body">
                    <div class="row">
                        <div class="col-auto">
                            <i class="fas fa-user-friends" style="color: #f60c6b"></i>
                            <h6 class="d-inline"> Friends</h6>
                            <div class="d-inline text-muted"> · 420</div>
                        </div>
                    </div>
                    <div class="row mt-2">
                        <div class="col">
                            <ul class="image-list-small m-0">
                                <li>
                                    <a href="#" style="background-image: url('assets/images/pictures/bahnhoff.jpg');"></a>
                                    <div class="details">
                                        <h3><a href="#">In the subway</a></h3>

                                    </div>
                                </li>
                                <li>
                                    <a href="#" style="background-image: url('assets/images/pictures/industrial-mech.jpg');"></a>
                                    <div class="details">
                                        <h3><a href="#">Industrial</a></h3>

                                    </div>
                                </li>
                                <li>
                                    <a href="#" style="background-image: url('assets/images/pictures/colosseum.jpg');"></a>
                                    <div class="details">
                                        <h3><a href="#">When in Rome..</a></h3>

                                    </div>
                                </li>
                                <li>
                                    <a href="#" style="background-image: url('assets/images/pictures/sahale-wa.jpg');"></a>
                                    <div class="details">
                                        <h3><a href="#">Mountain Top</a></h3>

                                    </div>
                                </li>
                                <li>
                                    <a href="#" style="background-image: url('assets/images/pictures/tonemapped.jpg');"></a>
                                    <div class="details">
                                        <h3><a href="#">Vienna Adventure</a></h3>

                                    </div>
                                </li>
                                <li>
                                    <a href="#" style="background-image: url('assets/images/pictures/sands-of-life.jpg');"></a>
                                    <div class="details">
                                        <h3><a href="#">Magnificent beach</a></h3>

                                    </div>
                                </li>
                                <li>
                                    <a href="#" style="background-image: url('assets/images/pictures/sands-of-life.jpg');"></a>
                                    <div class="details">
                                        <h3><a href="#">Magnificent beach</a></h3>

                                    </div>
                                </li>
                                <li>
                                    <a href="#" style="background-image: url('assets/images/pictures/sands-of-life.jpg');"></a>
                                    <div class="details">
                                        <h3><a href="#">Magnificent beach</a></h3>

                                    </div>
                                </li>
                                <li>
                                    <a href="#" style="background-image: url('assets/images/pictures/sands-of-life.jpg');"></a>
                                    <div class="details">
                                        <h3><a href="#">Magnificent beach</a></h3>

                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="text-muted text-center mt-2">Phasebook © {{date("Y")}}
            </div>

        </div>
        <div class="col-sm-6">
            @if ($message = Session::get('success'))
            <div class="alert alert-success alert-block">
                <button type="button" class="close" data-dismiss="alert">×</button>
                <strong>{{ $message }}</strong>
            </div>
            @endif
            @if (count($errors) > 0)
            <div class="alert alert-danger">
                <strong>Whoops!</strong> There were some problems with your input.
                <ul>
                    @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif
            @if(count($posts) == 0)
            <div class="text-muted text-center mt-3">No posts yet</div>
            @endif
            @foreach($posts as $post)
            <div class="card my-3">
                <div class="card-body pb-0">
                    <!-- <div class="card-title"> -->
                    <div class="row mb-1">
                        <div class="col-sm-2 mx-w-14">
                            <img src="@if($post->pro_pic  == NULL){{ asset('img/main.png') }}@else {{asset('img/'. str_replace(' ', '_', strtolower($post->name)).'/'.$post->pro_pic)}} @endif" class="rounded mx-auto d-block img-fluid cr-pos-img" alt="Image">
                        </div>
                        <div class="col-sm pad-lef-0">
                            {{$post->name}} <br>
                            <div class=" text-muted" style="font-size: 12px">{{$post->created_at}}</div>
                        </div>
                        <div class="col-sm-2">
                            <div class="btn-group offset-md-4">
                                <button class="btn btn-sm dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                </button>
                                <div class="dropdown-menu">
                                    <a href="{{route('del.post',[$post->pid])}}">Delete Post</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- </div> -->
                    <p>{{$post->post_caption}}</p>
                    <img src="{{ asset('img/'.str_replace(' ','_',strtolower($post->name)).'/'.$post->post_image) }}" class="img-fluid" alt="Responsive image">

                    <div><i class="far fa-thumbs-up"></i> <span id="{{$post->pid}}"> @if($post->like_count!=NULL) {{$post->like_count}}@else 0 @endif</span></div>
                    <div class="dropdown-divider"></div>
                    <div class="row">

                        @if($post->fd == NULL)
                        <div class="col justify-content-center text-center like" type="button" val="{{$post->pid}}">
                            <i class="far fa-thumbs-up"></i> Like
                            @else
                            <div class="col justify-content-center text-center dis-like" type="button" val="{{$post->pid}}" style="color: dodgerblue;">
                                <i class="fas fa-thumbs-up"></i> Like
                                @endif
                            </div>
                            <div class="col text-center">
                                <i class="far fa-comment-alt"></i> Comment
                            </div>
                        </div>
                    </div>
                    <div class="dropdown-divider"></div>
                    <div class="card-body py-0">
                        <div class="row">
                            <div class="col-sm-2 mx-w-14 ">
                                <img src="{{ asset('img/male_default.jpg') }}" class="rounded mx-auto d-block img-fluid cr-pos-img" alt="Image">
                            </div>
                            <div class="col-sm pad-lef-0">
                                <div class="input-group">
                                    <input class="form-control cr-pos-img bg-com" aria-label="With textarea" placeholder="Comment..."></textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
<script>
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    $('.like,.dis-like').click(function() {
        var pid = $(this).attr('val');
        //console.log($id);
        $pos = $(this);
        $chld = $(this).children("i");
        if ($pos.hasClass('like')) {
            $.ajax({
                type: 'POST',
                url: '/like',
                data: {
                    from: '{{ Auth::id() }}',
                    pid: pid
                },
                success: function(data) {
                    console.log(data);
                    $chld.removeClass();
                    $chld.addClass('fas fa-thumbs-up');
                    $pos.css('color', 'dodgerblue');
                    // $pos.removeClass('like');
                    // $pos.attr("class", "dis-like");
                    $pos.toggleClass('like dis-like');
                    $('#' + pid).html(parseInt($('#' + pid).html(), 10) + 1)

                }
            });

        } else {
            $.ajax({
                type: 'POST',
                url: '/dis_like',
                data: {
                    from: '{{ Auth::id() }}',
                    pid: pid
                },
                success: function(data) {
                    console.log(data);
                    $chld.removeClass();
                    $chld.addClass('far fa-thumbs-up');
                    $pos.css('color', 'black');

                    // $pos.removeClass('dis-like');
                    // $pos.attr("class", "like");
                    $pos.toggleClass('like dis-like');
                    $('#' + pid).html(parseInt($('#' + pid).html(), 10) - 1);
                }
            });

        }

    });

    $('#send_frnd_req').click(function() {
        @if($code == 3)

        $.ajax({
            type: 'POST',
            url: '/send_freq',
            data: {
                from: '{{ Auth::id() }}',
                to: '{{$user->uid}}'
            },
            success: function(data) {
                //$("#msg").html(data.msg);
                console.log(data);
                if (JSON.parse(data) == "success") {

                    $('#send_frnd_req').html('<i class="fas fa-user-plus"></i> Friend Request Sent');

                    //console.log($(this));
                }
            }
        });
        @elseif($code == 1)
        $.ajax({
            type: 'POST',
            url: '/accept_freq',
            data: {
                to: '{{ Auth::id() }}',
                from: '{{$user->uid}}'
            },
            success: function(data) {
                //$("#msg").html(data.msg);
                console.log(data);
                if (JSON.parse(data) == "success") {

                    $('#send_frnd_req').html('<i class="fas fa-check"></i> Friends');
                    $('#msg_btn').show();

                    //console.log($(this));
                }
            }
        });

        @endif

    });
</script>
@endsection