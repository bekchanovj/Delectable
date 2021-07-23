@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-3 p-5">
            <img src="{{ asset('img/cham.jpg') }}" alt="" class="rounded-circle" style="height:150px;">
        </div>
        <div class="col-9 pt-5">
            <div class="d-flex justify-content-between align-items-baseline">
                <div>
                    <h1>{{ $user->name }}</h1>
                </div>
                <a href="#">Create a new recipe</a>
            </div>
            <div class="d-flex">
                <div class="pr-5"><strong>192</strong> posts</div>
                <div class="pr-5"><strong>201</strong> followers</div>
                <div class="pr-5"><strong>132</strong> following</div>
            </div>
            <div class="pt-4 font-weight-bold">{{ $user->profile->title }}</div>
            <div>{{ $user->profile->description }}</div>
            <div><a href="#">{{ $user->profile->url }}</a></div>
        </div>
    </div>

    <div class="row pt-5">
        <div class="col-4">
            <img src="{{ asset('img/macrons.jpg') }}" class="w-100" style="height:350px; width:250px;" alt="">
        </div>
        <div class="col-4">
            <img src="{{ asset('img/eggs.jpg') }}" class="w-100" style="height:350px; width:250px;" alt="">
        </div>
        <div class="col-4">
            <img src="{{ asset('img/saucers.jpg') }}" class="w-100" style="height:350px; width:250px;" alt="">
        </div>
    </div>

</div>
@endsection