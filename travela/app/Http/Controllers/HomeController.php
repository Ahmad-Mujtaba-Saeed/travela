<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('home'); // Return the home view
    }
    public function aboutUs(){
        return view('about');
    }
}
