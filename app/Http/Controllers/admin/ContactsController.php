<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Contact;

class ContactsController extends Controller
{
    public function distroy(Request $request,$id){
        
    $contact = Contact::find($id);

    if ($contact) {
        // Delete the contact
        $contact->delete();

        // Optionally, redirect or return a response
        return redirect()->back()->with('success', 'Contact deleted successfully.');
    } else {
        // Handle the case where the contact is not found
        return redirect()->back()->with('error', 'Contact not found.');
    }
    }
}
