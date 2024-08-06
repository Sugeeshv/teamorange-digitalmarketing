<?php

namespace App\Http\Controllers\web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Services;

class HomesController extends Controller
{
    public function view(Request $request){
        // Retrieve data from the database
        $services = Services::all(); // Retrieve all posts
        $sere = Services::latest()->take(6)->get(); 

        // Pass data to the view
        return view('web.services', compact('services','sere'));

    }
    public function views(Request $request,$id){
        $service = Services::find($id);
        $sere = Services::latest()->take(6)->get(); 
        return view('web.services_view',compact('service','sere'));
    }
    public function home(Request $request){
        // Retrieve data from the database
        $services = Services::all(); // Retrieve all posts
        $sere = Services::latest()->take(6)->get(); 

        // Pass data to the view
        return view('web.index', compact('services','sere'));

    }
    public function contact()
    {
        $sere = Services::latest()->take(6)->get(); 

        return view('web.contact', compact('sere'));
    }
    public function about()
    {
        // dd("hi");
        $sere = Services::latest()->take(6)->get(); 
        $services = Services::all(); // Retrieve all posts

        return view('web.about', compact('sere','services'));
    }
}
