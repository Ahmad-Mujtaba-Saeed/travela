<?php

namespace App\Http\Controllers;

use App\Models\TourCategory;
use App\Models\TourPackage;
use App\Models\User;
use GrahamCampbell\ResultType\Success;
use Illuminate\Http\Request;
use Validator;
use Illuminate\Support\Facades\Storage;


class ToursController extends Controller
{
    public function index()
    {
        $TourCategory = TourCategory::all();
        return view('Tour', compact('TourCategory'));
    }
    public function addTourCategory()
    {
        return view('admin/addCategory');
    }
    public function ViewCategories()
    {
        $TourCategory = TourCategory::all();

        return view('admin/ViewCategories', compact('TourCategory'));
    }
    public function CreatePackage()
    {
        $TourCategory = TourCategory::all();
        return view('admin/CreatePackage', compact('TourCategory'));
    }
    public function ViewPackages()
    {
        $tourPackages = TourPackage::all();
        return view('admin/ViewPackages', compact('tourPackages'));
    }
    public function Packages()
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
        $tourPackages = TourPackage::paginate(10);
        return view('packages', compact('tourPackages','cities'));
    }


    public function addTourCategoryDB(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'Type' => 'required|string|max:100',
            'img' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'description' => 'required|string|max:100',
        ]);
        if ($validator->fails()) {
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
        if ($tourCategory) {
            return redirect()->back()->with('success', 'Tour Category added successfully!');
        } else {
            return redirect()->back()->with('error', 'Failed to add Tour Category!');
        }
    }
    public function deleteTourCategoryDB(Request $request)
    {
        $ID = $request->query('ID');
        $category = TourCategory::find($ID);
        $imgPath = $category->ImgName;
        $deleted = Storage::disk('public')->delete($imgPath);
        if ($deleted) {
            if ($category->delete()) {
                return redirect()->back()->with('success', 'successfully deleted Category!');
            } else {
                return redirect()->back()->with('error', 'Failed to delete Category!');
            }
        } else {
            return redirect()->back()->with('error', 'Failed to delete Package!');
        }
    }
    public function editTourCategoryDB(Request $request)
    {
        $ID = $request->query('ID');
        $category = TourCategory::find($ID);

        if ($category) {
            return redirect()->route('admin.addCategory')->with('category', $category);
        } else {
            return redirect()->back()->with('error', 'Failed to edit Category!');
        }
    }
    public function editDBTourCategoryDB(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'id' => 'required',
            'Type' => 'required|string|max:100',
            'description' => 'required|string|max:100',
        ]);
        if ($validator->fails()) {
            $response = [
                'success' => false,
                'message' => $validator->errors(),
            ];
            return $response;
        }
        $ID = $request->input('id');

        $category = TourCategory::find($ID);

        if ($category) {
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
                $category->ImgName = $filePath;
            }
            $category->Type = $request->input('Type');
            $category->description = $request->input('description');

            $category->save();

            return redirect()->route('admin.addCategory')->with('success', 'Category updated successfully!');
        } else {
            return redirect()->back()->with('error', 'Failed to Update Tour Category!');
        }
    }
    public function CategoryPackages(Request $request)
    {
        $id = $request->query('ID');
        $tourPackages = TourPackage::where('CategoryID', $id)->paginate(10);
        return view('packages', compact('tourPackages'));
    }


    public function CreatePackageDB(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'Location' => 'required|string|max:100',
            'Cost' => 'required',
            'img' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'CategoryID' => 'required',
            'Days' => 'required|integer',
            'ShortDescription' => 'required|',
            'DetailedDescription' => 'required|',
            'Rating' => 'required'
        ]);
        if ($validator->fails()) {
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
            'CategoryID' => (int) $request->input('CategoryID'),
            'Days' => $request->input('Days'),
            'ShortDescription' => $request->input('ShortDescription'),
            'DetailedDescription' => $request->input('DetailedDescription'),
            'Rating' => $request->input('Rating'),
        ]);
        if ($tourPackage) {
            return redirect()->back()->with('success', 'New Package created successfully!');
        } else {
            return redirect()->back()->with('error', 'Failed to create new package!');
        }
    }
    public function deletePackageDB(Request $request)
    {
        $ID = $request->query('ID');
        $Package = TourPackage::find($ID);
        $imgPath = $Package->ImgName;
        $deleted = Storage::disk('public')->delete($imgPath);
        if ($deleted) {
            if ($Package->delete()) {
                return redirect()->back()->with('success', 'successfully deleted Package!');
            } else {
                return redirect()->back()->with('error', 'Failed to delete Package!');
            }
        } else {
            return redirect()->back()->with('error', 'Failed to delete Package!');
        }
    }
    public function editPackageDB(Request $request)
    {
        $ID = $request->query('ID');
        $Package = TourPackage::find($ID);

        if ($Package) {
            return redirect()->route('admin.createPackage')->with('package', $Package);
        } else {
            return redirect()->back()->with('error', 'Failed to edit Category!');
        }
    }
    public function editDBPackageDB(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'id' => 'required',
            'Location' => 'required|string|max:100',
            'Cost' => 'required',
            'CategoryID' => 'required',
            'Days' => 'required|integer',
            'ShortDescription' => 'required',
            'DetailedDescription' => 'required',
            'Rating' => 'required'
        ]);
        if ($validator->fails()) {
            $response = [
                'success' => false,
                'message' => $validator->errors(),
            ];
            return $response;
        }
        $ID = $request->input('id');

        $package = TourPackage::find($ID);

        if ($package) {
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
                $package->ImgName = $filePath;
            }
            $package->Location = $request->input('Location');
            $package->Cost = $request->input('Cost');
            $package->CategoryID = (int) $request->input('CategoryID');
            $package->Days = $request->input('Days');
            $package->ShortDescription = $request->input('ShortDescription');
            $package->DetailedDescription = $request->input('DetailedDescription');
            $package->Rating = $request->input('Rating');

            $package->save();

            return redirect()->route('admin.createPackage')->with('success', 'Package updated successfully!');
        } else {
            return redirect()->back()->with('error', 'Failed to update package!');
        }
    }

    public function Readmore(Request $request)
    {
        $id = $request->query->get('ID');
        $data = TourPackage::find($id);

        return view('/Readmore', compact('data'));
    }
}
