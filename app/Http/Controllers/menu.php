<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class menu extends Controller
{
    public function home(){
        return view('layout.home');
    }

    public function service(){
        return view('layout.service');
    }

    public function blogs(){
        return view('layout.blogs');
    }

    public function abouts(){
        return view('layout.about');
    }

    public function contacts(){
        return view('layout.contact');
    }

   
}
