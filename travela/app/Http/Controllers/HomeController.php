<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $Data = User::select('name','email','Ph_Num','home_address','extraPh_Num')->first();
        return view('home',compact('Data')); // Return the home view
    }
    public function aboutUs(){
        $Data = User::select('name','email','Ph_Num','home_address','extraPh_Num')->first();
        return view('about',compact('Data'));
    }
}
