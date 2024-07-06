<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View; // Add this line to use the View facade

class BaseController extends Controller
{
    public function __construct()
    {
        View::share('Data');
    }
}
