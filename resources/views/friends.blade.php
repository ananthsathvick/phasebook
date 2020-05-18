@extends('pro_layout')

@section('con')
<div class="container mt-3">
    <div class="row">
        <div class="col-11">
            <div class="card">
                <div class="card-body">
                    @foreach($users as $u)
                    <a href="/account/{{$u->uid}}" class="text-decoration-none">
                        <div>
                            <div class="row mb-1">
                                <div class="col-sm-1">
                                    <img src="@if($u->pro_pic  == NULL){{ asset('img/main.png') }}@else {{asset('img/'. str_replace(' ', '_', strtolower($u->name)).'/'.$u->pro_pic)}} @endif" class="rounded mx-auto img-fluid cr-pos-img" alt="Image">
                                </div>
                                <div class="col-sm pad-lef-0">
                                    {{$u->name}} <br>
                                </div>
                            </div>
                        </div>
                    </a>
                    <div class="dropdown-divider"></div>

                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection