<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Movie;

class PageController extends Controller
{
    public function index(){
        $title = 'My Top 10 Movies';

        $movies = Movie::all();


        return view("home" ,compact("title","movies"));
    }
}