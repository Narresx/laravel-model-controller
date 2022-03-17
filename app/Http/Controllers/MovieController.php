<?php

namespace App\Http\Controllers;

use app\Movie;

class MovieController extends Controller
{
    public function index(){
        $movies = Movie::all();

        return view('movies.index', compact('movies'));
    }
}
