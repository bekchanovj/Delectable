@extends('layouts.app')

@section('content')
<div class="container">
    <form action="/post" enctype="multipart/form-data" method="post">
    @csrf
        <div class="row">
            <h1>Add New Recipe</h1>
        </div>

        <div class="row">
            <div class="col-8">
                <div class="form-group row">
                    <label for="caption" class="col-md-4 col-form-label">Post caption</label>


                    <input id="caption" name="caption" type="text" class="form-control @error('caption') is-invalid @enderror" value="{{ old('caption') }}" required autocomplete="caption" autofocus>

                    @error('caption')
                        <strong>{{ $message }}</strong>
                    @enderror
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-8">
                <div class="form-group row">
                    <label for="title" class="col-md-4 col-form-label">Title</label>


                    <input id="title" name="title" type="text" class="form-control @error('title') is-invalid @enderror" value="{{ old('title') }}" required autocomplete="caption" autofocus>

                    @error('title')
                        <strong>{{ $message }}</strong>
                    @enderror
                </div>
            </div>
        </div>

        <div class="row">
            <label for="image" class="col-md-4 col-form-label">Post Image</label>

            <input type="file" class="form-control-file" id="image" name="image">

            @error('image')
                <strong>{{ $message }}</strong>
            @enderror
        </div>

        <div class="row pt-4">
            <button class="btn btn-primary">Add New Post</button>
        </div>
    </form>
</div>
@endsection