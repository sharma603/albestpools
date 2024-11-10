<?php

namespace App\Http\Controllers;

use App\Notifications\SendContactForm;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Notification;

class Menu extends Controller
{
    public function home()
    {
        return view('layout.home');
    }

    public function service()
    {
        return view('layout.service');
    }

    public function blogs()
    {
        return view('layout.blogs');
    }

    public function abouts()
    {
        return view('layout.about');
    }

    public function contacts()
    {
        return view('layout.contact');
    }

    public function inquiry()
    {
        return view('layout.inquiry');
    }

    public function Gallery()
    {
        return view('layout.Gallery');
    }

    // public function sendEmail(Request $request)
    // {
    //     // Validate incoming data
    //     $data = $request->validate([
    //         'fullName' => 'required|string|max:255',
    //         'email' => 'required|email|max:255',
    //         'message' => 'nullable|string|max:20',
    //     ]);

    //     // Send notification
    //     Notification::route('mail', 'albestpools55@gmail.com')->notify(new SendContactForm($data));

    //     // Redirect to the thank you page
    //     return redirect()->route('layout.thank');
    // }
}
