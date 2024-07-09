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
        $filePath = public_path('cities.json');
        
        // Check if the file exists
        if (!file_exists($filePath)) {
            abort(404, "File not found");
        }
        
        // Read the file content
        $content = file_get_contents($filePath);
        
        // Decode the JSON content to an array
        $cities = json_decode($content, true);
        
        // Check if json_decode() returned an error
        if (json_last_error() !== JSON_ERROR_NONE) {
            abort(500, "Invalid JSON format");
        }

        $travelGuide  = TourGuide::all();
        $testimonials = Testimonail::all();
        $tourPackages = TourPackage::all();
        $TourCategory = TourCategory::all();
        
        return view('home',compact('TourCategory','tourPackages','testimonials','travelGuide','cities')); // Return the home view
    }
    public function aboutUs(){
        $travelGuide = TourGuide::all();
        return view('about',compact('travelGuide'));
    }
}
