<?php

namespace App\Http\Controllers\FrontEnd;

use App\Http\Controllers\Controller;
use App\Mail\ContactMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class EmailContactController extends Controller
{
    public function store(Request $request) {
        $data = $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'subject' => 'required',
            'message' => 'required'
        ]);

        Mail::to("info@bashonatrading.com")->send(new ContactMail($data));

        return redirect()->back()->with('success', 'Thanks for contacting us. We will get back to you soon.');
    }
}
