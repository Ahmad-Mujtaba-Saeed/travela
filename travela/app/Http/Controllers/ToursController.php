<?php

namespace App\Http\Controllers;

use App\Models\TourCategory;
use App\Models\TourPackage;
use App\Models\User;
use GrahamCampbell\ResultType\Success;
use Illuminate\Http\Request;
use Validator;

class ToursController extends Controller
{
    public function index(){
        $Data = User::select('name','email','Ph_Num','home_address','extraPh_Num')->first();
        return view('Tour',compact('Data'));
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
    public function Packages(){
        $Data = User::select('name','email','Ph_Num','home_address','extraPh_Num')->first();
        return view('packages',compact('Data'));
    }


    public function addTourCategoryDB(Request $request){
        $validator = Validator::make($request->all(),[
            'Type' => 'required|string|max:100',
            'img' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'description' => 'required|string|max:100',
        ]);
        if($validator->fails()){
            $response = [
                'success' => false,
                'message' => $validator->errors(),
            ];
            return $response;
        }
        if ($request->hasFile('img')) {
            $fileName = time() . '_' . $request->file('img')->getClientOriginalName();
            $filePath = $request->file('img')->storeAs('uploads/images', $fileName, 'public');
        }
        $tourCategory = TourCategory::create([
            'Type' => $request->input('Type'),
            'ImgName' => $filePath,
            'description' => $request->input('description'),
        ]);
        if($tourCategory){
            return redirect()->back()->with('success', 'Tour Category added successfully!');
        }
        else{
            return redirect()->back()->with('error', 'Tour Category added successfully!');
        }
    }



    public function CreatePackageDB(Request $request){
        $validator = Validator::make($request->all(),[
            'Location' => 'required|string|max:100',
            'Cost' => 'required',
            'img' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'CategoryID' => 'required',
            'Days' => 'required|integer',
            'ShortDescription' => 'required|string',
            'DetailedDescription' => 'required|string',
            'Rating' => 'required'
        ]);
        if($validator->fails()){
            $response = [
                'success' => false,
                'message' => $validator->errors(),
            ];
            return $response;
        }
        if ($request->hasFile('img')) {
            $fileName = time() . '_' . $request->file('img')->getClientOriginalName();
            $filePath = $request->file('img')->storeAs('uploads/images', $fileName, 'public');
        }
        $tourPackage = TourPackage::create([
            'Location' => $request->input('Location'),
            'Cost' => $request->input('Cost'),
            'ImgName' => $filePath,
            'CategoryID' => (int)$request->input('CategoryID'),
            'Days' => $request->input('Days'),
            'ShortDescription' => $request->input('ShortDescription'),
            'DetailedDescription' => $request->input('DetailedDescription'),
            'Rating' => $request->input('Rating'),
        ]);
        if($tourPackage){
            return redirect()->back()->with('success', 'New Package created successfully!');
        }
        else{
            return redirect()->back()->with('error', 'Failed to create new package!');
        }
    }

}
