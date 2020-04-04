@extends('layouts.all_pages')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-11">
            <div id="cover-pic-div">
                <img id="cover-pic" src="{{ asset('img/main.png') }}" class="" alt="Cover pic">
                <img src="{{ asset('img/main.png') }}" alt="..." class="rounded-circle bottom-left">
                <h4 id="pro-name">{{$user->name}}</h4>
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
                
                <button type="button" @if($code != 2) style="display: none;" @endif  class="btn btn-secondary btn-sm" id="msg_btn"><i class="fab fa-facebook-messenger"></i> Message</button>
                 
                    
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
            <div class="card">
                <p class="card-header py-1 px-1">Create Post</p>
                <div class="card-body cr-pos-cb">
                    <div class="row">
                        <div class="col-sm-2 mx-w-14">
                            <img src="{{ asset('img/male_default.jpg') }}" class="rounded mx-auto d-block img-fluid cr-pos-img" alt="Image">
                        </div>
                        <div class="col-sm pad-lef-0">
                            <div class="input-group">
                                <textarea class="cr-pos-ta" aria-label="With textarea" placeholder="What's on your mind"></textarea>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-6">
                            <div class="input-group">

                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" id="inputGroupFile01" aria-describedby="inputGroupFileAddon01">
                                    <label class="custom-file-label" for="inputGroupFile01">Add Media</label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="dropdown-divider"></div>
                    <button type="button" class="btn btn-primary btn-sm btn-block">Post</button>
                </div>
            </div>
            <div class="card my-3">
                <div class="card-body pb-0">
                    <!-- <div class="card-title"> -->
                    <div class="row mb-1">
                        <div class="col-sm-2 mx-w-14">
                            <img src="{{ asset('img/male_default.jpg') }}" class="rounded mx-auto d-block img-fluid cr-pos-img" alt="Image">
                        </div>
                        <div class="col-sm pad-lef-0">
                            User-name <br>
                            <div class=" text-muted" style="font-size: 12px">12:38</div>
                        </div>
                    </div>

                    <!-- </div> -->
                    <p>Documentation and examples for opting images into responsive behavior (so they never become larger than their parent elements) and add lightweight styles to them—all via classes.</p>
                    <img src="{{ asset('img/main.png') }}" class="img-fluid" alt="Responsive image">

                    <i class="far fa-thumbs-up"></i>Amogh,Srivatsa and 2 others
                    <div class="dropdown-divider"></div>
                    <div class="row">
                        <div class="col justify-content-center text-center">
                            <i class="far fa-thumbs-up"></i> Like
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
        </div>
    </div>
</div>
<script>
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    $('#send_frnd_req').click(function() {
        @if($code == 3)
        
            $.ajax({
                type: 'POST',
                url: '/send_freq',
                data: {from: '{{ Auth::id() }}' , to: '{{$user->uid}}'},
                success: function(data) {
                    //$("#msg").html(data.msg);
                    console.log(data);
                    if(JSON.parse(data) == "success")
                    {

                        $('#send_frnd_req').html('<i class="fas fa-user-plus"></i> Friend Request Sent');

                        //console.log($(this));
                    }
                }
            });
        @elseif($code == 1)
            $.ajax({
                    type: 'POST',
                    url: '/accept_freq',
                    data: {to: '{{ Auth::id() }}' , from: '{{$user->uid}}'},
                    success: function(data) {
                        //$("#msg").html(data.msg);
                        console.log(data);
                        if(JSON.parse(data) == "success")
                        {

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