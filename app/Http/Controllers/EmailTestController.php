<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class EmailTestController extends Controller
{
    public function sendInquiry(Request $request)
    {
        // Validate the incoming request data
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'message' => 'required|string',
        ]);

        // Prepare the email data
        $data = [
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'message' => $request->input('message'),
        ];

        // Send the email
        Mail::send('emails.inquiry', $data, function($message) use ($data) {
            $message->to('recipient@example.com') // Change to your actual recipient email
                    ->subject('New Inquiry from ' . $data['name']);
            $message->from($data['email'], $data['name']);
        });

        // Redirect or return a response
        return back()->with('success', 'Inquiry sent successfully!');
    }
}
