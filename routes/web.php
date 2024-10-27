<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InquiryController;
use App\Http\Controllers\menu;


// Home Route
Route::get('/', function () {
    return view('layout.home');
})->name('home');

// Service Route
Route::view('/service', 'layouts.service')->name('service');

// Inquiry Route
//Route::post('/inquiry', [InquiryController::class, 'store'])->name('inquiry.store');

// Other Routes (uncomment as needed)
Route::get('/home', [menu::class, 'home']);
Route::get('/service', [menu::class, 'service']);
Route::get('/abouts', [menu::class, 'abouts']);
Route::get('/blogs', [menu::class, 'blogs']);
Route::get('/abouts', [menu::class, 'abouts']);
Route::get('/contacts', [menu::class, 'contacts']);
// Route::view('/about', 'layouts.about')->name('about');
// Route::view('/portfolio', 'layouts.portfolio')->name('portfolio');
// Route::view('/pricing', 'layouts.pricing')->name('pricing');
// Route::view('/contact', 'layouts.contact')->name('contact');
