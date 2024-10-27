<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Inquiry;

class InqueryController extends Controller
{
    public function store(Request  $request){
        // validate incomming data
        $request->validate([
            'full_name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'contact_number' => 'nullable|string|max:20',
            'service_type' => 'nullable|string|max:50',
            'message' => 'nullable|string',
        ]);
       // Store data in the database
       Inquiry::create($request->all());

       // Return JSON response
       return response()->json(['success' => 'Inquiry submitted successfully!']);
    }
}
