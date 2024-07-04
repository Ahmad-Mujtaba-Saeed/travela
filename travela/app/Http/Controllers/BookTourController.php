<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class BookTourController extends Controller
{
    public function index(){
        $Data = User::select('name','email','Ph_Num','home_address','extraPh_Num')->first();
        return view('Booking',comapct('Data'));
    }
}
