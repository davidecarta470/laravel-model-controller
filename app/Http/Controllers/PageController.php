<?php

namespace App\Http\Controllers;

use App\Movies;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index(){
        return view('home');
    }
    public function movies(){
        $movies = Movies::all();
        dump($movies);
        return view('movies');
    }
    public function series(){
        return view('series');
    }
}
