<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\BlogsController;
use App\Http\Controllers\BookTourController;
use App\Http\Controllers\ContactusController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PackagesController;
use App\Http\Controllers\TestimonialController;
use App\Http\Controllers\TourManageController;
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


Route::get('/login',[AuthController::class, 'login'])->name('login');
Route::get('/dashboard',[DashboardController::class, 'index'])->name('dashboard');

Route::get('/TourManage/addTourCategory',[ToursController::class, 'addTourCategory'])->name('addTourCategory');
Route::get('/TourManage/ViewCategories',[ToursController::class, 'ViewCategories'])->name('ViewCategories');
Route::get('/TourManage/CreatePackage',[ToursController::class, 'CreatePackage'])->name('CreatePackage');
Route::get('/TourManage/ViewPackages',[ToursController::class, 'ViewPackages'])->name('ViewPackages');



Route::get('/TestimonialGuides/CreateTestimonail',[TestimonialController::class, 'CreateTestimonail'])->name('CreateTestimonail');
Route::get('/TestimonialGuides/ManageTestimonail',[TestimonialController::class, 'ManageTestimonail'])->name('ManageTestimonail');

Route::get('/TestimonialGuides/CreateTravelGuide',[TravelGuideController::class,'CreateTravelGuide'])->name('CreateTravelGuide');
Route::get('/TestimonialGuides/ManageTravelGuide',[TravelGuideController::class,'ManageTravelGuide'])->name('ManageTravelGuide');

Route::fallback(function () {
    return response()->view('404', []);
});