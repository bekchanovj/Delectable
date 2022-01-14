@extends('layouts.app')

@section('content')
<div class="container">
          
    <!-- Main CSS File -->
    <link href="/css/style.css" rel="stylesheet">
    
    <div>
        <h1 style="text-align:center">Welcome to Delectable!</h1>
    </div>

    <div>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

        <!-- The form -->
        <form class="example" action="action_page.php">
            <input type="text" placeholder="Search for the recipe..." name="search">
            <button type="submit"><i class="fa fa-search"></i></button>
        </form>
    </div>

    <div class="row">
        <div class="col-9 pt-5">
            <div>
                <h4>Here are some popular recipes: </h4>
            </div>
        </div>
    </div>
    <div class="row pt-5 pb-4">
        @foreach($posts as $post)
            <div class="col-lg-6 offset-3">
                @include('layouts/postbuild')
            </div>
        @endforeach
    
    </div>
    
</div>
@endsection