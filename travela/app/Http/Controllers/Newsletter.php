<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Validator;
use DB;

class Newsletter extends Controller
{
    public function index(Request $request){
        $validator = Validator::make($request->all(), [
            'Email' => 'Required|email',
        ]);
        if ($validator->fails()) {
            $response = [
                'success' => false,
                'message' => $validator->errors(),
            ];
            return $response;
        }
        $Email = $request->input('Email');
        DB::beginTransaction();
        try{
        $newsletter = \App\Models\Newsletter::create([
            'Email' => $Email,
        ]);
        $details = [
            'Email' => $request->input('Email'),
        ];
        $email = 'ahmadmujtabap72@gmail.com';
        Mail::to($email)->send(new \App\Mail\Newsletter($details));
        DB::commit();
        return redirect()->back()->with('success', 'Newsletter Subscribed Successfully');
        }
        catch (\Exception $e) {
            // Rollback the transaction in case of error
            DB::rollBack();
            return redirect()->back()->with('error', 'Failed to Subscribe Newsletter. Please try again');
        }
    }
}
