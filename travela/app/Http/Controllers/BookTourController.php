<?php

namespace App\Http\Controllers;

use App\Models\CustomDeal;
use App\Models\User;
use Illuminate\Http\Request;
use Validator;
use DB;
use Illuminate\Support\Facades\Mail;

class BookTourController extends Controller
{
    public function index(){
        return view('Booking');
    }
    public function customDeal(Request $request){
        // Validate the request input
        $validator = Validator::make($request->all(),[
            'Name' => 'required|string|max:100',
            'Email' => 'required|email',
            'Date' => 'required|string',
            'Package' => 'required',
            'Persons' => 'required|integer',
            'Kids' => 'required|integer',
            'SpecialRequest' => 'required|string|max:500',
        ]);
    
        // Check if the validation fails
        if($validator->fails()){
            return redirect()->back()->with('error', $validator->errors()->first());
        }
    
        // Start a database transaction
        DB::beginTransaction();
        try {
            // Create a new custom deal
            $customDeal = CustomDeal::create([
                'Name' => $request->input('Name'),
                'Email' => $request->input('Email'),
                'Date' => $request->input('Date'),
                'Package' => $request->input('Package'),
                'Persons' => $request->input('Persons'),
                'Kids' => $request->input('Kids'),
                'SpecialRequest' => $request->input('SpecialRequest'),
            ]);
            DB::commit();

            $details = [
                'title' => 'Custom Tour Request Deal',
                'Name' => $request->input('Name'),
                'Email' => $request->input('Email'),
                'Date' => $request->input('Date'),
                'Package' => $request->input('Package'),
                'Persons' => $request->input('Persons'),
                'kids' => $request->input('Kids'),
                'SpecialRequest' => $request->input('SpecialRequest'),
            ];
            $email = 'ahmadmujtabap72@gmail.com';
            Mail::to($email)->send(new \App\Mail\CustomDeal($details));

            return redirect()->back()->with('success', 'Custom Deal Request Successfully Sent');
        } catch (\Exception $e) {
            // Rollback the transaction in case of error
            DB::rollBack();
    
            return redirect()->back()->with('error', 'Failed to send Request. Please try again');
        }
    }
}
