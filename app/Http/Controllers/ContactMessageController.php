<?php

namespace App\Http\Controllers;

use App\Models\ContactMessage;
use Illuminate\Http\Request;

class ContactMessageController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'email' => 'nullable|email|max:255',
            'company' => 'nullable|string|max:255',
            'message' => 'required|string',
        ]);

        ContactMessage::create($request->only('first_name', 'last_name', 'email', 'company', 'message'));

        return response()->json(['message' => 'Message sent successfully'], 201);
    }
}