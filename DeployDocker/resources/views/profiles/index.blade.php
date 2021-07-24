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
                <a href="/post/create">Create a new recipe</a>
            </div>
            <div class="d-flex">
                <div class="pr-5"><strong>{{ $user->posts->count() }}</strong> posts</div>
                <div class="pr-5"><strong>201</strong> followers</div>
                <div class="pr-5"><strong>132</strong> following</div>
            </div>

        </div>
    </div>

    <div class="row pt-5">

        @foreach($user->posts as $post)
        <div class="col-4 pb-4">
            <img src="/storage/{{ $post->image }}" class="w-100" style="height:350px; width:250px;" alt="">

            <p> {{ $post->caption }} </p>

            <p> {{ $post->title }} </p>
        </div>
        @endforeach
    </div>
    @endsection