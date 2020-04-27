<div>
@if(count($users) == 0)
Send Some Requests Niggah!
@else
@foreach($users as $user)
<a class="dropdown-item" href="/account/{{$user->uid}}">{{$user->name}}</a>
<div class="dropdown-divider"></div>
@endforeach
@endif
</div>