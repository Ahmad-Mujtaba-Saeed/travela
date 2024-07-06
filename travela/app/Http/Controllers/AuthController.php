<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Validator;
use Hash;

class AuthController extends Controller
{
    public function login(){
        return view('admin/login');
    }
    public function registerDB(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|string|min:8',
            'Ph_Num' => 'required|string|max:15',
            'extraPh_Num' => 'required|string|max:15',
            'home_address' => 'required|string|max:255',
        ]);
    
        if ($validator->fails()) {
            $response = [
                'success' => false,
                'message' => $validator->errors()
            ];
            return response()->json($response, 401);
        }
        
        $data = $validator->validated();
        $data['password'] = Hash::make($data['password']);
    
        $user = User::create($data);
    
        $response = [
            'success' => true,
            'message' => 'User registered successfully',
            'user' => $user
        ];
    
        return response()->json($response, 201);
    }
    public function  loginDB(Request $request){
        $validator = Validator::make($request->all(), [
            'email' => 'required|email',
            'password' => 'required',
        ]);
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }
        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            $user = Auth::user();
            $request->session()->put('id', $user->id);
            $request->session()->put('name', $user->name);
            $request->session()->put('email', $user->email);
            return redirect()->route('admin.dashboard', compact('user'));
        } else {
            return redirect()->back()->with('error', 'Invalid email or password');
        }
    }
    public function logout(Request $request){
            Auth::logout(); 
            $request->session()->invalidate(); 
            $request->session()->regenerateToken();
            return redirect('/login');
    }
}
