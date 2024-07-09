<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Validator;

class ContactusController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('contact');
    }

    public function Contact(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'Name' => 'required|string',
            'Email' => 'required|email',
            'Subject' => 'required|string',
            'Message' => 'required|max:500',
        ]);
        if ($validator->fails()) {
            return redirect()->back()->with('error', $validator->errors()->first());
        }
        $email = 'ahmadmujtabap72@gmail.com';

        $details = [
            'Name' => $request->input('Name'),
            'Email' => $request->input('Email'),
            'Subject' => $request->input('Subject'),
            'Message' => $request->input('Message'),
        ];

        try {
            Mail::to($email)->send(new \App\Mail\Contactus($details));
            return redirect()->back()->with('success', 'Form Submission Success');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Failed to Submit form. Please try again.');
        }

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
