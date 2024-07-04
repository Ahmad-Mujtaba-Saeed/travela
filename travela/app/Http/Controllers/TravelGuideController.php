<?php

namespace App\Http\Controllers;

use App\Models\TourGuide;
use Illuminate\Http\Request;
use Validator;

class TravelGuideController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('travelGuide');
    }

    public function CreateTravelGuide(){
        return view('admin/CreateTravelGuide');
    }
    public function ManageTravelGuide(){
        return view('admin/ManageTravelGuide');
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
            'img' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'flink' => 'required|string',
            'tlink' => 'required|string',
            'ilink' => 'required|string',
            'llink' => 'required|string',
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
        $testimonial = TourGuide::create([
            'Name' => $request->input('Name'),
            'ImgName' => $filePath,
            'flink' => $request->input('flink'),
            'tlink' => $request->input('tlink'),
            'ilink' => $request->input('ilink'),
            'llink' => $request->input('llink'),
        ]);
        if($testimonial){
            return redirect()->back()->with('success', 'Tour Category added successfully!');
        }
        else{
            return redirect()->back()->with('error', 'Tour Category added successfully!');
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
        //
    }
}
