@extends('layouts.app')

@section('page_title')
Movies - Home
@endsection

@section('content')
<div class="x-100 d-flex justify-content-center align-items-center">
<div class="text-center">
    <h1 class="my-primary display-4 py-5">Welcome to Movie Store</h1>
    <p class="my-primary display-6 py-5">If you want to discover our collection, use the navigation bar at the top of the page or click the button below</p>
    <a href="{{route('movies.index')}}" class="btn display-6 p-3 my-5">Discover our movies</a>
</div>
</div>
@endsection
