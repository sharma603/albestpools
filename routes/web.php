<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InquiryController;
use App\Http\Controllers\EmailTestController;
use App\Http\Controllers\emailSend;
use App\Http\Controllers\menu;
use App\Models\Inquiry;

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

// Route::post('/thank', [menu::class, 'thank']);
// Route::view('/about', 'layouts.about')->name('about');
// Route::view('/portfolio', 'layouts.portfolio')->name('portfolio');
// Route::view('/pricing', 'layouts.pricing')->name('pricing');
// Route::view('/contact', 'layouts.contact')->name('contact');
// Route::post('/send-inquiry', [InquiryController::class, 'sendInquiry'])->name('send.inquiry');
Route::post('/thank', [menu::class, 'sendEmail'])->name('send.email');
//Route::POST('/enqueryform', [emailSend::class, 'enqueryData'])->name('enqueryform');
Route::post('/enquery', [emailSend::class, 'enqueryData'])->name('enqueryform');
//Route::post('/enqueryform', [emailSend::class, 'enqueryData'])->name('enqueryform');
