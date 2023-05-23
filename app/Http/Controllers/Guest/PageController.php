<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Movie;

class PageController extends Controller
{
    public function index(){
        $movies = Movie::all();
        // dd($movies);
        return view('movies.index', compact('movies'));
    }

    public function show($id){
        $movie = Movie::findOrFail($id);
        $rating = round($movie->vote / 2);
        $year = substr($movie->date, 0, 4);
        return view('movies.show', compact('movie', 'rating', 'year'));
    }
}
