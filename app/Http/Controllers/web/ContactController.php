<?php

namespace App\Http\Controllers\web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Contact;

class ContactController extends Controller
{
    public function store(Request $request){
        // dd($request);
        $request->validate([
            'first' => 'required|string|min:3',
            'second' => 'required|string',
            'email' => 'required|string|email',
            'phone' => 'required|string|unique:contacts,phone',
            'message' => 'required|string|min:10|max:500',
        ]);

        Contact::create([
            'firstname' => $request->first,
            'secondname' => $request->second,
            'email' => $request->email,
            'phone' => $request->phone,
            'message' => $request->message,
        ]);

        return redirect()->back()->with('success', 'Post created successfully.');
    }
}
