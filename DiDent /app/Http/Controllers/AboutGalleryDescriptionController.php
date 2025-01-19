<?php

namespace App\Http\Controllers;

use App\Models\AboutGalleryDescription;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AboutGalleryDescriptionController extends Controller
{
    public function index(){
        $aboutGalleryDescription = AboutGalleryDescription::first();
        return view('admin.aboutGalleryDescription',compact('aboutGalleryDescription'));
    }

    public function update(Request $request)
    {
        // Validate the request data
        $request->validate([
            'image1' => 'nullable|image|mimes:jpeg,png,gif,jpg|max:2048',
            'image2' => 'nullable|image|mimes:jpeg,png,gif,jpg|max:2048',
            'description' => 'required|string',
        ]);
    
        // Fetch the record to update
        $record = AboutGalleryDescription::firstOrFail(); // Replace 'YourModel' with your actual model name
        $record->description = $request->input('description');
    
        // Handle image1
        if ($request->hasFile('image1')) {
            // Delete the old image1 if it exists
            if ($record->image1 && Storage::exists($record->image1)) {
                Storage::delete($record->image1);
            }
    
            // Store the new image1
            $file1 = $request->file('image1');
            $fileName1 = time() . '_image1_' . $file1->getClientOriginalName(); // Create a unique name
            $filePath1 = $file1->storeAs('image', $fileName1, 'public'); // Save to 'storage/app/public/image'
            $record->image1 = $filePath1; // Save the relative path in the database
        }
    
        // Handle image2
        if ($request->hasFile('image2')) {
            // Delete the old image2 if it exists
            if ($record->image2 && Storage::exists($record->image2)) {
                Storage::delete($record->image2);
            }
    
            // Store the new image2
            $file2 = $request->file('image2');
            $fileName2 = time() . '_image2_' . $file2->getClientOriginalName(); // Create a unique name
            $filePath2 = $file2->storeAs('image', $fileName2, 'public'); // Save to 'storage/app/public/image'
            $record->image2 = $filePath2; // Save the relative path in the database
        }
    
        // Save the updated record
        $record->save();
    
        // Redirect with a success message
        return redirect()->back()->with('success', 'Record updated successfully!');
    }
    
}
