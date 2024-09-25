<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index(){
        $title = 'My Top 10 Movies';
        return view("home" ,compact("title"));
    }
}