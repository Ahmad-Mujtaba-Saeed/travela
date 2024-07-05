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
Route::get('/aboutus', [HomeController::class, 'aboutUs'])->name('aboutUs');
Route::get('/packages', [ToursController::class, 'Packages'])->name('Packages');
Route::get('/blogs', [BlogsController::class, 'index'])->name('OurBlogs');


Route::get('tour/explore', [ToursController::class, 'index'])->name('All_Tours');
Route::get('tour/booking', [BookTourController::class, 'index'])->name('Booking');
Route::get('tour/travelGuide', [TravelGuideController::class, 'index'])->name('TravelGuide');
Route::get('tour/testimonial', [TestimonialController::class, 'index'])->name('testimonial');

Route::get('/contactus', [ContactusController::class, 'index'])->name('contact');




Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('admin.dashboard');

    // Tours Management Routes
    Route::prefix('/TourManage')->group(function () {
        Route::get('/addTourCategory', [ToursController::class, 'addTourCategory'])->name('admin.addCategory');
        Route::get('/ViewCategories', [ToursController::class, 'ViewCategories'])->name('ViewCategories');
        Route::post('/addTourCategoryDB', [ToursController::class, 'addTourCategoryDB'])->name('addTourCategoryDB');
        Route::get('/deleteTourCategoryDB', [ToursController::class, 'deleteTourCategoryDB'])->name('deleteTourCategoryDB');
        Route::get('/editTourCategoryDB', [ToursController::class, 'editTourCategoryDB'])->name('editTourCategoryDB');
        Route::post('/editDBTourCategoryDB', [ToursController::class, 'editDBTourCategoryDB'])->name('editDBTourCategoryDB');

        Route::get('/CreatePackage', [ToursController::class, 'CreatePackage'])->name('admin.createPackage');
        Route::post('/CreatePackageDB', [ToursController::class, 'CreatePackageDB'])->name('CreatePackageDB');
        Route::get('/ViewPackages', [ToursController::class, 'ViewPackages'])->name('ViewPackages');
        Route::get('/deletePackageDB', [ToursController::class, 'deletePackageDB'])->name('deletePackageDB');
        Route::get('/editPackageDB', [ToursController::class, 'editPackageDB'])->name('editPackageDB');
        Route::post('/editDBPackageDB', [ToursController::class, 'editDBPackageDB'])->name('editDBPackageDB');
    });

    // Testimonial Routes
    Route::prefix('/TestimonialGuides')->group(function () {
        Route::get('/CreateTestimonail', [TestimonialController::class, 'CreateTestimonail'])->name('CreateTestimonail');
        Route::post('/CreateTestimonailDB', [TestimonialController::class, 'create'])->name('CreateTestimonailDB');
        Route::get('/ManageTestimonail', [TestimonialController::class, 'ManageTestimonail'])->name('ManageTestimonail');
        Route::get('/deleteTestimonailDB', [TestimonialController::class, 'deleteTestimonailDB'])->name('deleteTestimonailDB');
        Route::get('/editTestimonailDB', [TestimonialController::class, 'editTestimonailDB'])->name('editTestimonailDB');
        Route::post('/editDBTestimonailDB', [TestimonialController::class, 'editDBTestimonailDB'])->name('editDBTestimonailDB');
    });

    // Travel Guide Routes
    Route::prefix('/TestimonialGuides')->group(function () {
        Route::get('/CreateTravelGuide', [TravelGuideController::class, 'CreateTravelGuide'])->name('CreateTravelGuide');
        Route::post('/CreateTravelGuideDB', [TravelGuideController::class, 'create'])->name('CreateTravelGuideDB');
        Route::get('/ManageTravelGuide', [TravelGuideController::class, 'ManageTravelGuide'])->name('ManageTravelGuide');
        Route::get('/deleteTravelGuideDB', [TravelGuideController::class, 'deleteTravelGuideDB'])->name('deleteTravelGuideDB');
        Route::get('/editTravelGuideDB', [TravelGuideController::class, 'editTravelGuideDB'])->name('editTravelGuideDB');
        Route::post('/editDBTravelGuideDB', [TravelGuideController::class, 'editDBTravelGuideDB'])->name('editDBTravelGuideDB');
    });
});





Route::get('/login', [AuthController::class, 'login'])
    ->middleware('auth.redirect') // Apply middleware here
    ->name('login');
// Route::post('/registerDB',[AuthController::class,'registerDB'])->name('registerDB');
Route::post('/loginDB', [AuthController::class, 'loginDB'])->name('loginDB');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');


Route::fallback(function () {
    return response()->view('404', []);
});