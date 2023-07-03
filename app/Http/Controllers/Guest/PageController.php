<?php

namespace App\Http\Controllers\Guest;

use App\Models\Movie;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PageController extends Controller
{
    public function index()
    {
        $movies = Movie::all();
        // dd(Movie::all());


        return view('home', compact('movies'));
    }
}
