@extends('layouts.app')
@section('content')
    <div class="my-primary show-movie d-flex justify-content-center align-items-center">
        <div class="">
        <h1 class="text-center pb-5">Info About <span class="my-tertiary"> {{ $movie->title }} </span></h1>
        <div class="d-flex justify-content-between align-items-start position-relative">
            <div class="">
                <img src="{{ $movie->image }}" class="" alt="{{ $movie->title }}">
            </div>
            <div class="ps-5 fs-3">
                <h3 class="my-secondary"><span class="fw-bold">{{ $movie->title }}</span></h3>
                <div class="">Original title: <span class="fw-bold">{{ $movie->original_title }}</span></div>
                <div class="">Nationality:<span class="fw-bold"> {{ $movie->nationality }}</span></div>
                <div class="">Vote:<span class="fw-bold"> {{ $movie->vote }}</span></div>
                <div class="">Release date:<span class="fw-bold"> {{ $movie->date }}</span></div>
            </div>
            <a href="{{route('movies.index')}}" class="btn my-absolute">Go Back</a>
        </div>
    </div>
    </div>
    {{-- <h1>{{$movie->title}}</h1> --}}
@endsection
