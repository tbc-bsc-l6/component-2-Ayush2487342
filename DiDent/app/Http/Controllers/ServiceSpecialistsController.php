<?php

namespace App\Http\Controllers;

use App\Models\ServiceSpecialists;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ServiceSpecialistsController extends Controller
{
    public function index()
    {

        $specialist = ServiceSpecialists::first();
        return view('admin.serviceSpecialists',compact('specialist'));
    }

    public function update(Request $request)
    {
        // Validation
        $validated = $request->validate([
            'heading' => 'required|string|max:255',
            'description' => 'required|string|max:600',
            'image1' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'image2' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'image3' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'image4' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'image5' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        // Find the service specialist by ID
        $specialist = ServiceSpecialists::firstOrFail();

        // Update the fields
        $specialist->heading = $request->input('heading');
        $specialist->description = $request->input('description');

        // Image Handling
        for ($i = 1; $i <= 5; $i++) {
            $imageField = 'image' . $i;

            if ($request->hasFile($imageField)) {
                // Delete old image from storage
                if ($specialist->{"image{$i}"}) {
                    Storage::delete('public/' . $specialist->{"image{$i}"});
                }

                // Store new image
                $imagePath = $request->file($imageField)->store('specialist_images', 'public');
                $specialist->{"image{$i}"} = $imagePath;
            }
        }

        // Save the updated data
        $specialist->save();

        // Redirect with success message
        return redirect()->back()->with('success', 'Service Specialist updated successfully.');
    }
}
