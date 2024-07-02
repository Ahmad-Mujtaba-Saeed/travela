<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BookTourController extends Controller
{
    public function index(){
        return view('Booking');
    }
}
