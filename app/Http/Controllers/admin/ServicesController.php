<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Services;

class ServicesController extends Controller
{
    public function view(){

        $service = Services::all(); // Retrieve all posts

        // Pass data to the view
        return view('admin.services',compact('service'));
    }
    public function save(Request $request){
        // dd($request->urls);
        $request->validate([
            'title' => 'required|string|min:3',
            'short' => 'required|string|min:3|max:200',
            'description' => 'required|string|min:3',
        ]);

        // thumbnail

        if ($request->hasFile('thumbnails')) {
            $file = $request->file('thumbnails');
            $fileName = time() . '_' . $file->getClientOriginalName();
            $filePath = $file->storeAs('thumbnailss', $fileName, 'public');

            // return response()->json(['path' => $filePath], 200);
        }

        // img

        if ($request->hasFile('img')) {
            $files = $request->file('img');
            $fileNames = time() . '_' . $files->getClientOriginalName();
            $filePaths = $files->storeAs('img', $fileNames, 'public');

            // return response()->json(['path' => $filePath], 200);
        }
        
        Services::create([
            'title' => $request->title,
            'shortdescription' => $request->short,
            'description' => $request->description,
            'thumbnail' => $filePath,
            'img' => $filePaths,
            'url' => $request->urls,
        ]);

        return redirect()->back()->with('success', 'Data saved successfully!');
    }
    public function distroy(Request $request,$id){
        $ser = Services::find($id);

    if ($ser) {
        // Delete the contact
        $ser->delete();

        // Optionally, redirect or return a response
        return redirect()->back()->with('success', 'Data deleted successfully!');
    } else {
        // Handle the case where the contact is not found
        return redirect()->back()->with('success', 'Data deleted successfully!');
    }
    }
    public function edit(Request $request,$id){
        $ser = Services::find($id);
        return view('admin.services-edit',compact('ser'));
    }
    public function update(Request $request,$id){ // dd($request->urls);
        $request->validate([
            'title' => 'required|string|min:3',
            'short' => 'required|string|min:3|max:200',
            'description' => 'required|string|min:3',
        ]);

        // thumbnail

        if ($request->hasFile('thumbnails')) {
            $file = $request->file('thumbnails');
            $fileName = time() . '_' . $file->getClientOriginalName();
            $filePath = $file->storeAs('thumbnailss', $fileName, 'public');

            // return response()->json(['path' => $filePath], 200);
        }else{
            $filePath = $request->thu;
            // dd($filePath);
        }

        // img

        if ($request->hasFile('img')) {
            $files = $request->file('img');
            $fileNames = time() . '_' . $files->getClientOriginalName();
            $filePaths = $files->storeAs('img', $fileNames, 'public');

            // return response()->json(['path' => $filePath], 200);
        }else{
            $filePaths = $request->im;
        }
        
        $serviceId = $id;

// Find the record and update it
$service = Services::find($serviceId);

if ($service) {
    $service->update([
        'title' => $request->title,
        'shortdescription' => $request->short,
        'description' => $request->description,
        'thumbnail' => $filePath,
        'img' => $filePaths,
        'url' => $request->urls,
    ]);
} else {
    // Handle the case where the record is not found
}

        return redirect()->back()->with('success', 'Data saved successfully!');

    }
}
