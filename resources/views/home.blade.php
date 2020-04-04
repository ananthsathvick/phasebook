@extends('layouts.all_pages')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-sm-2">
            <div class="row my-1">
                <div class="col-sm-2 p-0">
                    <img src="{{ asset('img/male_default.jpg') }}" class="rounded mx-auto d-block img-fluid cr-pos-img" alt="Image">
                </div>
                <div class="col-sm pr-0">
                    {{Auth::user()->name}}
                </div>
            </div>

            <div class="row" id="news-feed">
                <div class="col-sm-2 p-0">
                    <img src="{{ asset('img/news_feed.webp') }}" class="mx-auto d-block img-fluid" alt="Image">
                </div>
                <div class="col-sm pr-0">
                    News Feed
                </div>
            </div>

            <div class="row my-1">
                <div class="col-sm-2 p-0">
                    <img src="{{ asset('img/messenger.png') }}" class="mx-auto d-block img-fluid" alt="Image">
                </div>
                <a href="/messenger" style="text-decoration: none!important;"><div class="col-sm pr-0">
                    Messenger
                </div></a>
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
                                <textarea class="cr-pos-ta" aria-label="With textarea" placeholder="Write Something Here ..."></textarea>
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

        <div class="col-sm">
            One of three columns
        </div>
    </div>
</div>
@endsection