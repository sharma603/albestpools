<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('layout.home');
});

// Route::view('/home', 'layouts/home')->name('home');
// Route::view('/about', 'layouts/about')->name('about');
// Route::view('/portfolio', 'layouts/portfolio')->name('portfolio');
// Route::view('/service', 'layouts/service')->name('service');
// Route::view('/pricing', 'layouts/pricing')->name('pricing');
// Route::view('/contact', 'layouts/contact')->name('contact');
