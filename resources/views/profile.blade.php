@extends('pro_layout')

@section('con')
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
                            <div>{{$user->bio}}</div>
                        </div>
                    </div>
                    <div class="dropdown-divider"></div>
                    <div class="row mb-3">
                        <div class="col-auto">
                            <i class="fas fa-briefcase"></i>
                            <div class="d-inline">{{$user->work}}</div>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-auto">
                            <i class="fas fa-graduation-cap"></i>
                            <div class="d-inline">{{$user->study}}</div>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-auto">
                            <i class="fas fa-calendar-alt"></i>
                            <div class="d-inline">{{$user->dob}}</div>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-auto">
                            <i class="fas fa-venus-mars"></i>
                            <div class="d-inline">{{$user->gender}}</div>
                        </div>
                    </div>
                    <a href="/profile/edit" type="button" class="btn btn-secondary btn-sm btn-block">Edit Details</a>
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
                                @foreach($posts as $post)
                                <a href="#pos_{{$post->pid}}">
                                    <div><img src="{{ asset('img/'.str_replace(' ','_',strtolower($post->name)).'/'.$post->post_image) }}" class="" alt="Cover pic" style="object-fit:contain"></div>
                                </a>
                                @endforeach
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
                            <div class="d-inline text-muted">{{count($users_frnd)}}</div>
                        </div>
                    </div>
                    <div class="row mt-2">
                        <div class="col">
                            <ul class="image-list-small m-0">
                                @foreach($users_frnd as $u)
                                <li>
                                    <a href="/account/{{$u->uid}}" style="background-image: url(
                                        @if($u->pro_pic  == NULL)
                                @if($u->gender == 'Male')
                                {{ asset('img/male_default.png') }}
                                @else
                                {{ asset('img/female_default.jpg') }}
                                @endif
                              @else 
                              {{asset('img/'. str_replace(' ', '_', strtolower($u->name)).'/'.$u->pro_pic)}} 
                            @endif)"></a>
                                    <div class="details">
                                        <h3><a href="/account/{{$u->uid}}">{{$u->name}}</a></h3>

                                    </div>
                                </li>
                                @endforeach
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
            <div class="card">
                <form action="{{ route('upload-post') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <p class="card-header py-1 px-1">Create Post</p>
                    <div class="card-body cr-pos-cb">
                        <div class="row">
                            <div class="col-sm-2 mx-w-14">
                                <img src="@if(Auth::user()->pro_pic  == NULL)
                                @if(Auth::user()->gender == 'Male')
                                {{ asset('img/male_default.png') }}
                                @else
                                {{ asset('img/female_default.jpg') }}
                                @endif
                              @else 
                              {{asset('img/'. str_replace(' ', '_', strtolower(Auth::user()->name)).'/'.Auth::user()->pro_pic)}} 
                            @endif" class="rounded mx-auto d-block img-fluid cr-pos-img" alt="Image">
                            </div>
                            <div class="col-sm pad-lef-0">
                                <div class="input-group">
                                    <textarea class="cr-pos-ta" name="caption" aria-label="With textarea" placeholder="What's on your mind"></textarea>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-sm-6">
                                <div class="input-group">

                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" id="inputGroupFile01" name="image" aria-describedby="inputGroupFileAddon01">
                                        <label class="custom-file-label" for="inputGroupFile01">Add Media</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="dropdown-divider"></div>
                        <button type="submit" class="btn btn-primary btn-sm btn-block">Post</button>
                    </div>
                </form>
            </div>
            @if(count($posts) == 0)
            <div class="text-muted text-center mt-3">No posts yet</div>
            @endif
            @foreach($posts as $post)
            <div class="card my-3" id="pos_{{$post->pid}}">
                <div class="card-body pb-0">
                    <!-- <div class="card-title"> -->
                    <div class="row mb-1">
                        <div class="col-sm-2 mx-w-14">
                            <img src="@if($post->pro_pic  == NULL)
                                @if($post->gender == 'Male')
                                {{ asset('img/male_default.png') }}
                                @else
                                {{ asset('img/female_default.jpg') }}
                                @endif
                              @else 
                              {{asset('img/'. str_replace(' ', '_', strtolower($post->name)).'/'.$post->pro_pic)}} 
                            @endif" class="rounded mx-auto d-block img-fluid cr-pos-img" alt="Image">
                        </div>
                        <div class="col-sm pad-lef-0">
                            <a href="/account/{{$post->uid}}">{{$post->name}} </a><br>
                            <div class=" text-muted" style="font-size: 12px">{{$post->created_at}}</div>
                        </div>
                        <div class="col-sm-2">
                            @if(Auth::user()->uid == $post->uid)
                            <div class="btn-group offset-md-4">
                                <button class="btn btn-sm dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                </button>
                                <div class="dropdown-menu">
                                    <a href="{{route('del.post',[$post->pid])}}">Delete Post</a>
                                </div>
                            </div>
                            @endif
                        </div>
                    </div>

                    <!-- </div> -->
                    <p>{{$post->post_caption}}</p>
                    <img src="{{ asset('img/'.str_replace(' ','_',strtolower($post->name)).'/'.$post->post_image) }}" class="img-fluid" alt="Responsive image">

                    <div type="button" class="liked_by underline" id="lkedby_{{$post->pid}}" data-toggle="modal" data-target="#like_count_{{$post->pid}}"><i class="far fa-thumbs-up"></i> <span id="{{$post->pid}}"> @if($post->like_count!=NULL) {{$post->like_count}}@else 0 @endif</span></div>

                    <!-- Modal -->
                    <div class="modal fade" id="like_count_{{$post->pid}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalCenterTitle">Liked by</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body" id="modal_body_{{$post->pid}}">
                                    ...
                                </div>
                            </div>
                        </div>
                    </div>




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
                            <div class="col text-center getc" type="button" id="getc_{{$post->pid}}">
                                <i class="far fa-comment-alt"></i> Comment
                            </div>
                        </div>
                    </div>
                    <div class="dropdown-divider"></div>
                    <div class="card-body py-0">
                        <div class="row">
                            <div class="col-sm-2 mx-w-14 ">
                                <img src="@if(Auth::user()->pro_pic  == NULL)
                                @if(Auth::user()->gender == 'Male')
                                {{ asset('img/male_default.png') }}
                                @else
                                {{ asset('img/female_default.jpg') }}
                                @endif
                              @else 
                              {{asset('img/'. str_replace(' ', '_', strtolower(Auth::user()->name)).'/'.Auth::user()->pro_pic)}} 
                            @endif" class="rounded mx-auto d-block img-fluid cr-pos-img" alt="Image">
                            </div>
                            <div class="col-sm pad-lef-0">
                                <div class="input-group">
                                    <input class="form-control cr-pos-img bg-com comment" id="comm_{{$post->pid}}" aria-label="With textarea" placeholder="Comment..."></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="dropdown-divider"></div>
                        <div id="app_{{$post->pid}}"></div>

                    </div>
                </div>
                @endforeach
            </div>
        </div>
        <script>
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            $('.liked_by').click(function() {
                var iid = $(this).attr('id');
                var pid = iid.split('_')[1];
                console.log(pid);
                $.ajax({
                    type: 'POST',
                    url: '/liked_by',
                    data: {
                        pid: pid
                    },
                    success: function(data) {
                        console.log('#modal_body_' + pid);
                        $('#modal_body_' + pid).html(data);
                    }
                });
            });

            $('.getc').click(function() {
                var iid = $(this).attr('id');
                var pid = iid.split('_')[1];
                console.log(pid);
                $.ajax({
                    type: 'POST',
                    url: '/get_comment',
                    data: {
                        pid: pid
                    },
                    success: function(data) {
                        console.log('#app_' + pid);
                        $('#app_' + pid).html(data);
                    }
                });
            });

            $('.comment').keypress(function(e) {
                var key = e.which;
                if (key == 13) // the enter key code
                {
                    var com = $(this).val();
                    var pid = $(this).attr('id');
                    $(this).val('');
                    $.ajax({
                        type: 'POST',
                        url: '/comment',
                        data: {
                            from: '{{ Auth::id() }}',
                            pid: pid,
                            comment: com
                        },
                        success: function(data) {

                            pid = pid.split("_")[1];
                            console.log('#app_' + pid);
                            $('#app_' + pid).html(data);
                        }
                    });

                }
            });

            function cover_pic() {
                $("#inp_cover").click();

            }

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
        </script>
        @endsection