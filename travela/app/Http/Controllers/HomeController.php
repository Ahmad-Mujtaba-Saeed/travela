<?php

namespace App\Http\Controllers;

use App\Models\Testimonail;
use App\Models\TourCategory;
use App\Models\TourGuide;
use App\Models\TourPackage;
use App\Models\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $travelGuide = TourGuide::all();
        $testimonials = Testimonail::all();
        $tourPackages = TourPackage::all();
        $TourCategory = TourCategory::all();
        $Data = User::select('name','email','Ph_Num','home_address','extraPh_Num')->first();
        return view('home',compact('Data','TourCategory','tourPackages','testimonials','travelGuide')); // Return the home view
    }
    public function aboutUs(){
        $travelGuide = TourGuide::all();
        $Data = User::select('name','email','Ph_Num','home_address','extraPh_Num')->first();
        return view('about',compact('Data','travelGuide'));
    }
}
