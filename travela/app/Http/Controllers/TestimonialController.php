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

    public function editTestimonailDB(Request $request)
    {
        $ID = $request->query('ID');
        $Testimonail = Testimonail::find($ID);
    
        if ($Testimonail) {
            return redirect()->route('CreateTestimonail')->with('Testimonail', $Testimonail);
        } else {
            return redirect()->back()->with('error', 'Failed to edit Testimonail!');
        }
    }

    public function editDBTestimonailDB(Request $request){
        $validator = Validator::make($request->all(), [
            'id' => 'required',
            'Comment' => 'required|string|max:100',
            'Name' => 'required|string|max:100',
        ]);
        if ($validator->fails()) {
            $response = [
                'success' => false,
                'message' => $validator->errors(),
            ];
            return $response;
        }
        $ID = $request->input('id');

        $Testimonail = Testimonail::find($ID);

        if ($Testimonail) {
            if ($request->hasFile('img')) {
                $prevImgPath = $request->input('ImgName');
                if (isset($prevImgPath)) {
                    $deleted = Storage::disk('public')->delete($prevImgPath);
                    if ($deleted) {
                        \Log::error('Deleted previous image');
                    } else {
                        \Log::error('Failed to delete previous image');
                    }
                }
                $fileName = time() . '_' . $request->file('img')->getClientOriginalName();
                $filePath = $request->file('img')->storeAs('uploads/images', $fileName, 'public');
                $Testimonail->ImgName = $filePath;
            }
        $Testimonail->Name = $request->input('Name');
        $Testimonail->Comment = $request->input('Comment');
        $Testimonail->Location = $request->input('Location');
        $Testimonail->Rating = $request->input('Rating');

        $Testimonail->save();

        return redirect()->route('CreateTestimonail')->with('success', 'Testimonial updated successfully!');
    } else {
            return redirect()->back()->with('error', 'Failed to Update Tour Testimonial!');
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
