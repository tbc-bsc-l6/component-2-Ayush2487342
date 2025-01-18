<?php

namespace App\Http\Controllers;

use App\Models\MakeBetter;
use Illuminate\Http\Request;

class MakeBetterController extends Controller
{
    public function index(){
        $makeBetter = MakeBetter::first();
        return view('admin.makebetter',compact('makeBetter'));
    }

    public function update(Request $request)
    {
        $request->validate([
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'title' => 'required|string|max:255',
            'description' => 'required|string|max:5000',
        ]);
    
        // Fetch the existing record
        $makeBetterUpdate = MakeBetter::firstOrFail();
    
        // Handle image upload
        if ($request->hasFile('image')) {
            // Delete old image if it exists
            if ($makeBetterUpdate->image && file_exists(public_path($makeBetterUpdate->image))) {
                unlink(public_path($makeBetterUpdate->image));
            }
    
            // Save new image
            $file = $request->file('image');
            $fileName = time() . '_' . $file->getClientOriginalName();
            $filePath = $file->storeAs('image', $fileName, 'public');
            $makeBetterUpdate->image = 'storage/' . $filePath; // Save the new file path
        }
    
        // Update other fields
        $makeBetterUpdate->heading = $request->input('title');
        $makeBetterUpdate->description = $request->input('description');
        $makeBetterUpdate->save();
    
        // Redirect back with success message
        return redirect()->back()->with('success', 'Make Better was successfully updated!');
    }
    
}
