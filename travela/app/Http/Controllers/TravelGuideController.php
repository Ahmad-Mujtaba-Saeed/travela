<?php

namespace App\Http\Controllers;

use App\Models\TourGuide;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
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

    public function CreateTravelGuide()
    {
        return view('admin/CreateTravelGuide');
    }
    public function ManageTravelGuide()
    {
        $travelGuide = TourGuide::all();
        return view('admin/ManageTravelGuide', compact('travelGuide'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'Name' => 'required|string',
            'img' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'flink' => 'required|string',
            'tlink' => 'required|string',
            'ilink' => 'required|string',
            'llink' => 'required|string',
        ]);
        if ($validator->fails()) {
            return redirect()->back()->with('error', $validator->errors());
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
        if ($testimonial) {
            return redirect()->back()->with('success', 'New Travel Guide added successfully!');
        } else {
            return redirect()->back()->with('error', 'Failed to add Travel Guide!');
        }
    }

    public function deleteTravelGuideDB(Request $request)
    {
        $ID = $request->query('ID');
        $TourGuides = TourGuide::find($ID);
        $imgPath = $TourGuides->ImgName;
        $deleted = Storage::disk('public')->delete($imgPath);
        if ($deleted) {
            if ($TourGuides->delete()) {
                return redirect()->back()->with('success', 'successfully deleted TourGuide!');
            } else {
                return redirect()->back()->with('error', 'Failed to delete TourGuide!');
            }
        } else {
            return redirect()->back()->with('error', 'Failed to delete TourGuide!');
        }
    }

    public function editTravelGuideDB(Request $request)
    {
        $ID = $request->query('ID');
        $TourGuide = TourGuide::find($ID);

        if ($TourGuide) {
            return redirect()->route('CreateTravelGuide')->with('TourGuide', $TourGuide);
        } else {
            return redirect()->back()->with('error', 'Failed to edit TourGuide!');
        }
    }
    public function editDBTravelGuideDB(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'id' => 'required',
            'flink' => 'required|string',
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

        $TourGuide = TourGuide::find($ID);

        if ($TourGuide) {
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
                $TourGuide->ImgName = $filePath;
            }
            $TourGuide->Name = $request->input('Name');
            $TourGuide->flink = $request->input('flink');
            $TourGuide->tlink = $request->input('tlink');
            $TourGuide->ilink = $request->input('ilink');
            $TourGuide->llink = $request->input('llink');

            $TourGuide->save();

            return redirect()->route('CreateTravelGuide')->with('success', 'Testimonial updated successfully!');
        } else {
            return redirect()->back()->with('error', 'Failed to Update Tour Testimonial!');
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
