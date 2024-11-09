<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\LaravelMailFile; 
use Illuminate\Support\Facades\Mail;

class emailSend extends Controller
{
    public $data;
    public $name;
    public $email;
    public $phone;
    public $service;
    public $message;

    public function enqueryData(Request $data)
    {
        // $data = $request->only(['name', 'email', 'phone', 'service', 'message']);
       $this->data = $data->all(); 
        // Mail::to('albestpools55@gmail.com')->send(new LaravelMailFile($data));
        // return response()->json(['message' => 'Thank you for your inquiry!'], 200);

        $this->name = $this->data['name'];
        $this->email = $this->data['email'];
        $this->service = $this->data['service'];
        $this->phone = $this->data['phone'];
        $this->message = $this->data['message'];

        \Mail::to('albestpools55@gmail.com')->send(new LaravelMailFile([
            "name" => $this->name,
            "email" => $this->email,
            "phone" => $this->phone,
            "service" => $this->service,
            "message" => $this->message
        ]));
        // // Mail::to('albestpools55@gmail.com')->send(new LaravelMailFile( $this->name, $this->email,$this->service,$this->phone,$this->message));;
         return view('layout.home');
        
    }
}
