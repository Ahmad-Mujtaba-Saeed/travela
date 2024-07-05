<?php

namespace App\Http\Controllers;

use App\Models\Testimonail;
use App\Models\TourGuide;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Validator;

class TestimonialController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $testimonials = Testimonail::all();
        $Data = User::select('name','email','Ph_Num','home_address','extraPh_Num')->first();
        return view('testimonial',compact('Data','testimonials'));
    }

    public function CreateTestimonail(){
        return view('admin/CreateTestimonail');
    }
    public function ManageTestimonail(){
        $testimonials = Testimonail::all();
        return view('admin/ManageTestimonail',compact('testimonials'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $validator = Validator::make($request->all(),[
            'Name' => 'required|string',
            'Location' => 'required|string',
            'img' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'Comment' => 'required|string',
            'Rating' => 'required'
        ]);
        if($validator->fails()){
            $response = [
                'success' => false,
                'message' => $validator->errors()
            ];
            return $response;
        }
        if ($request->hasFile('img')) {
            $fileName = time() . '_' . $request->file('img')->getClientOriginalName();
            $filePath = $request->file('img')->storeAs('uploads/images', $fileName, 'public');
        }
        $testimonial = Testimonail::create([
            'Name' => $request->input('Name'),
            'ImgName' => $filePath,
            'Location' => $request->input('Location'),
            'Comment' => $request->input('Comment'),
            'Rating' => $request->input('Rating')
        ]);
        if($testimonial){
            return redirect()->back()->with('success', 'New Testimonial added successfully!');
        }
        else{
            return redirect()->back()->with('error', 'Failed to add Testimonial!');
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function deleteTestimonailDB(Request $request)
    {
        $ID = $request->query('ID');
        $testimonial = Testimonail::find($ID);
        $imgPath = $testimonial->ImgName;
        $deleted = Storage::disk('public')->delete($imgPath);
        if($deleted){
        if ($testimonial->delete()) {
            return redirect()->back()->with('success', 'successfully deleted Testimonial!');
        } else {
            return redirect()->back()->with('error', 'Failed to delete Testimonial!');
        }
    }
    else{
        return redirect()->back()->with('error', 'Failed to delete Testimonial!');
    }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        
    }
}
