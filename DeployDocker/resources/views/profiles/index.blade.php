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
            </div>

        </div>
    </div>

    <div class="row pt-5">

        @foreach($user->posts as $post)
        <div class="col-4 pb-4">
            <img src="/storage/{{ $post->image }}" class="w-100" style="height:350px; width:250px;" alt="">

            <p> <b>Title:</b> {{ $post->title }} </p>

            <p> <b>Description:</b> {{ $post->caption }} </p>            

            <p> <b>Servings:</b> {{ $post->servings }} </p>

            <p> <b>Cooking Time:</b> {{ $post->c_time }} minutes</p>

            <p> <b>Prep Time:</b> {{ $post->p_time }} minutes</p>

            <p> <b>Ingredients:</b> {{ $post->ingredients }} </p>

            <p> <b>Instructions:</b> {{ $post->instructions }} </p>

            <p> <b>Notes:</b> {{ $post->notes }} </p>
        </div>
        @endforeach
    </div>
    @endsection