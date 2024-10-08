<?php

namespace App\Http\Controllers;

use App\Mail\ContactUsMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function contactUs(Request $request)
    {
        // Validate form data
        $request->validate([
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'country' => 'required|string',
            'message' => 'required|string',
        ]);

        // Collect form data
        $data = $request->only('first_name', 'last_name', 'email', 'country', 'message');


        // Send email
        Mail::to($request->email)->send(new ContactUsMail($data));

        return back()->with('success', 'Your message has been sent successfully!');
    }
}
