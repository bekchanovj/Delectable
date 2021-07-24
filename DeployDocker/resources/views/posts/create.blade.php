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
                    <label for="title" class="col-md-4 col-form-label">Title:</label>


                    <input id="title" placeholder="Enter the title of the recipe" name="title" type="text" class="form-control @error('title') is-invalid @enderror" value="{{ old('title') }}" required autocomplete="caption" autofocus>

                    @error('title')
                    <strong>{{ $message }}</strong>
                    @enderror
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-8">
                <div class="form-group row">
                    <label for="caption" class="col-md-4 col-form-label">Description:</label>


                    <input id="caption" placeholder="A little about your recipe" name="caption" type="text" class="form-control @error('caption') is-invalid @enderror" value="{{ old('caption') }}" required autocomplete="caption" autofocus>

                    @error('caption')
                    <strong>{{ $message }}</strong>
                    @enderror
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-8">
                <div class="form-group row">
                    <label for="caption" class="col-md-4 col-form-label">Description:</label>


                    <input id="caption" placeholder="A little about your recipe" name="caption" type="text" class="form-control @error('caption') is-invalid @enderror" value="{{ old('caption') }}" required autocomplete="caption" autofocus>

                    @error('caption')
                    <strong>{{ $message }}</strong>
                    @enderror
                </div>
            </div>
        </div>

        <table class="table table-bordered" id="dynamicTable">

            <tr>

                <th>Ingredient</th>

                <th>Qty</th>

                <th>Units</th>

                <th>Action</th>

            </tr>

            <tr>

                <td><input type="text" name="addmore[0][ing]" placeholder="Enter Ingredient" class="form-control" /></td>

                <td><input type="text" name="addmore[0][qty]" placeholder="Enter Qty" class="form-control" /></td>

                <td><input type="text" name="addmore[0][units]" placeholder="Enter Units" class="form-control" /></td>

                <td><button type="button" name="add" id="add" class="btn btn-success">Add More</button></td>

            </tr>

        </table>

        <div class="row">
            <label for="image" class="col-md-4 col-form-label">Add Photo</label>

            <input type="file" class="form-control-file" id="image" name="image">

            @error('image')
            <strong>{{ $message }}</strong>
            @enderror
        </div>

        <div class="row pt-4">
            <button class="btn btn-primary">Add New Recipe</button>
        </div>
    </form>
</div>
@endsection