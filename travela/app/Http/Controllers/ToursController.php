<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ToursController extends Controller
{
    public function index(){
        return view('Tour');
    }
    public function addTourCategory(){
        return view('admin/addCategory');
    }
    public function ViewCategories(){
        return view('admin/ViewCategories');
    }
    public function CreatePackage(){
        return view('admin/CreatePackage');
    }
    public function ViewPackages(){
        return view('admin/ViewPackages');
    }
}
