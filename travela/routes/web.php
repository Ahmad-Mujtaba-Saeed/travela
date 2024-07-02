<?php

use App\Http\Controllers\BlogsController;
use App\Http\Controllers\BookTourController;
use App\Http\Controllers\ContactusController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PackagesController;
use App\Http\Controllers\TestimonialController;
use App\Http\Controllers\ToursController;
use App\Http\Controllers\TravelGuideController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/aboutus',[HomeController::class, 'aboutUs'])->name('aboutUs');
Route::get('/packages',[PackagesController::class, 'index'])->name('OurPackages');
Route::get('/blogs',[BlogsController::class, 'index'])->name('OurBlogs');


Route::get('tour/explore',[ToursController::class, 'index'])->name('All_Tours');
Route::get('tour/booking',[BookTourController::class, 'index'])->name('Booking');
Route::get('tour/travelGuide',[TravelGuideController::class, 'index'])->name('TravelGuide');
Route::get('tour/testimonial',[TestimonialController::class, 'index'])->name('testimonial');

Route::get('/contactus',[ContactusController::class, 'index'])->name('contact');