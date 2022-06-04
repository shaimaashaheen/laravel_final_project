@extends('admin.layout.master')
@section('title')
    Home Page
@endsection
@section('pageTitle')
    Dashboard
@endsection
@section('content')

            <div class="col-4 text-center" id = "number1">

                <h1> Categories</h1>
                <p class="pp"> {{count($categories)}}</p>
                <br />

            </div>

            <div class="col-4 text-center" id = "number2">
                <h1>Posts</h1>
                <p class="pp"> {{count($posts)}}</p>
                <br />
            </div>





    <!-- Main Content Setion Ends -->
@endsection
