<?php

namespace App\Http\Controllers;

use App\Models\ContactMessage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function showForm()
    {
        return view('frontend.contact');
    }

    public function submitForm(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'message' => 'required|string',
        ]);


        ContactMessage::create($data);


        Mail::raw($data['message'], function($message) use ($data) {
            $message->to('your-email@example.com')
                ->subject('New Contact Message from ' . $data['name']);
        });

        return back()->with('success', 'Message sent successfully!');
    }
}
