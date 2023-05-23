@extends('layouts.app')
@section('content')
    <div class="my-primary show-movie d-flex justify-content-center align-items-center">
        <div class="h-100">
            <h1 class="text-center">Info About <span class="my-tertiary"> {{ $movie->title }} </span></h1>
            <div class="d-flex justify-content-between align-items-start position-relative">
                <div class="h-100">
                    <img src="{{ $movie->image }}" class="my-img" alt="{{ $movie->title }}">
                </div>
                <div class="ps-5 fs-3">
                    <h3 class="my-secondary"><span class="fw-bold">{{ $movie->title }}</span></h3>
                    <div>Original title: <span class="fw-bold">{{ $movie->original_title }}</span></div>
                    <div>Nationality:<span class="fw-bold"> {{ $movie->nationality }}</span></div>
                    <div class="d-none d-sm-block">Release in: <span class="fw-bold"> {{ $year }}</span></div>
                    <div class="d-none d-sm-block">Vote:<span class="fw-bold"> {{ $movie->vote }}</span></div>
                    @php
                        $rating = intval($rating);
                    @endphp
                    @foreach (range(1, 5) as $i)
                        @if ($i <= $rating)
                            <span><i class="fa-solid fa-star"></i></span>
                        @else
                            <span><i class="fa-regular fa-star"></i></span>
                        @endif
                    @endforeach
                </div>
                <a href="{{ route('movies.index') }}" class="btn my-absolute d-none d-sm-block">Go Back</a>
            </div>
        </div>
    </div>
@endsection
