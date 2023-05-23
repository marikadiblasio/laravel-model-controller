@extends('layouts.app')

@section('content')
    @foreach ($movies as $movie)
        <div class="col-12 col-md-6 col-lg-4">
            <div class="card my-3">
                <img src="{{ $movie->image }}" class="card-img-top" alt="{{ $movie->title }}">
                <div class="card-body">
                    <h5 class="card-title">{{ $movie->title }}</h5>
                    <p class="card-text">{{ $movie->original_title }}</p>
                    <a href="{{route('movies.show', $movie->id)}}" class="btn">More Info</a>
                </div>
            </div>
        </div>
    @endforeach
@endsection
