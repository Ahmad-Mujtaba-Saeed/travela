<?php

namespace App\Http\Controllers;

use App\Mail\SendDealBack;
use App\Models\CustomDeal;
use App\Models\User;
use Illuminate\Http\Request;
use Validator;
use DB;
use Illuminate\Support\Facades\Mail;
use App\Mail\CancelRequest;

class BookTourController extends Controller
{
    public function index(){
        return view('Booking');
    }

    public function BookingRequest(){
        $BookingRequest = CustomDeal::where('Accepted',false)->get();
        return view('admin.BookingRequests',compact('BookingRequest'));
    }
    public function cancelRequest(Request $request){
        $ID = $request->query('ID');
        $RequestTour = CustomDeal::find($ID);
    
        if($RequestTour){
            $email = $RequestTour->Email;
            $details = [
                'ID' => $RequestTour->id,
                'Name' => $RequestTour->Name
            ];
            try {
                Mail::to($email)->send(new CancelRequest($details));
            } catch (\Exception $e) {
                return redirect()->back()->with('error', 'Failed to send cancellation email. Please try again.');
            }
    
            $RequestTour->delete();
            return redirect()->back()->with('success', 'Request Deleted Successfully');
        } else {
            return redirect()->back()->with('error', 'Request not found');
        }
    }

    public function SendDealBack(Request $request){
        $validator = Validator::make($request->all(),[
            'id' => 'required',
            'Price' => 'required',
        ]);
        if($validator->fails()){
            return redirect()->back()->with('error', $validator->errors()->first());
        }
        $ID = $request->input('id');
        $RequestTour = CustomDeal::find($ID);
        $RequestTour->Price = $request->input('Price');
        $RequestTour->save();
        $email = $RequestTour->Email;

        $details = [
            'title' => 'Custom Tour Requested Deal',
            'id' => $request->input('id'),
            'Name' => $RequestTour->Name,
            'Email' => $RequestTour->Email,
            'Date' => $RequestTour->Date,
            'Package' => $RequestTour->Package,
            'Persons' => $RequestTour->Persons,
            'Kids' => $RequestTour->Kids,
            'SpecialRequest' => $RequestTour->SpecialRequest,
            'Price' => $request->input('Price'),
        ];
        try {
            Mail::to($email)->send(new SendDealBack($details));
            return redirect()->back()->with('success', 'Deal Send Successfully');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Failed to send Request Deal email. Please try again.');
        }
        
    }



    public function customDeal(Request $request){

        $validator = Validator::make($request->all(),[
            'Name' => 'required|string|max:100',
            'Email' => 'required|email',
            'Date' => 'required|string',
            'Package' => 'required',
            'Persons' => 'required|integer',
            'Kids' => 'required|integer',
            'SpecialRequest' => 'required|string|max:500',
        ]);

        if($validator->fails()){
            return redirect()->back()->with('error', $validator->errors()->first());
        }

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
            
            $details = [
                'title' => 'Custom Tour Request Deal',
                'Name' => $request->input('Name'),
                'Email' => $request->input('Email'),
                'Date' => $request->input('Date'),
                'Package' => $request->input('Package'),
                'Persons' => $request->input('Persons'),
                'Kids' => $request->input('Kids'),
                'SpecialRequest' => $request->input('SpecialRequest'),
            ];
            $email = 'ahmadmujtabap72@gmail.com';
            Mail::to($email)->send(new \App\Mail\CustomDeal($details));
            
            DB::commit();
            return redirect()->back()->with('success', 'Custom Deal Request Successfully Sent');
        } catch (\Exception $e) {
            // Rollback the transaction in case of error
            DB::rollBack();
    
            return redirect()->back()->with('error', 'Failed to send Request. Please try again');
        }
    }
}
