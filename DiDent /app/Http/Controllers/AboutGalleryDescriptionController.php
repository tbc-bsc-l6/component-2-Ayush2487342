<?php

namespace App\Http\Controllers;

use App\Models\AboutGalleryDescription;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AboutGalleryDescriptionController extends Controller
{
    /**
     * Display the current gallery description.
     */
    public function index(){
        $aboutGalleryDescription = AboutGalleryDescription::first(); // Retrieve the first or only record
        return view('admin.aboutGalleryDescription', compact('aboutGalleryDescription')); // Return the view with the data
    }

    /**
     * Handle updates to the gallery description and images.
     */
    public function update(Request $request)
    {
        // Validate incoming request data
        $request->validate([
            'image1' => 'nullable|image|mimes:jpeg,png,gif,jpg|max:2048', // Optional image1 with specified file types and size
            'image2' => 'nullable|image|mimes:jpeg,png,gif,jpg|max:2048', // Optional image2 with specified file types and size
            'description' => 'required|string', // Required text for the description
        ]);
    
        // Fetch the existing record or fail if not found
        $record = AboutGalleryDescription::firstOrFail();
        $record->description = $request->input('description'); // Update description
    
        // Handle the uploading of image1
        if ($request->hasFile('image1')) {
            // Check and delete the old image1 if it exists
            if ($record->image1 && Storage::exists($record->image1)) {
                Storage::delete($record->image1);
            }
    
            // Store the new image1 and update the database path
            $file1 = $request->file('image1');
            $fileName1 = time() . '_image1_' . $file1->getClientOriginalName(); // Generate a unique file name
            $filePath1 = $file1->storeAs('image', $fileName1, 'public'); // Store the file in public storage
            $record->image1 = $filePath1; // Update the database with the new path
        }
    
        // Handle the uploading of image2
        if ($request->hasFile('image2')) {
            // Check and delete the old image2 if it exists
            if ($record->image2 && Storage::exists($record->image2)) {
                Storage::delete($record->image2);
            }
    
            // Store the new image2 and update the database path
            $file2 = $request->file('image2');
            $fileName2 = time() . '_image2_' . $file2->getClientOriginalName(); // Generate a unique file name
            $filePath2 = $file2->storeAs('image', $fileName2, 'public'); // Store the file in public storage
            $record->image2 = $filePath2; // Update the database with the new path
        }
    
        // Save the changes to the record
        $record->save();
    
        // Redirect back to the same page with a success message
        return redirect()->back()->with('success', 'Record updated successfully!');
    }
    
}
