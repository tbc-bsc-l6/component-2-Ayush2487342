<?php

namespace App\Http\Controllers;

use App\Models\AboutBest;
use App\Models\AboutBestCard;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AboutBestController extends Controller
{
    /**
     * Display the about page content.
     */
    public function index()
    {
        $aboutBest = AboutBest::first(); // Fetch the first 'AboutBest' record
        $aboutBestCard = AboutBestCard::all(); // Fetch all 'AboutBestCard' records
        return view('admin.aboutBest', compact('aboutBest', 'aboutBestCard')); // Return the view with data
    }

    /**
     * Update the main about content.
     */
    public function update(Request $request)
    {
        // Validate the request data
        $request->validate([
            'heading' => 'required|string|max:100'
        ]);

        $updateBest = AboutBest::firstOrFail(); // Get the first 'AboutBest' or fail
        $updateBest->heading = $request->input('heading'); // Set the new heading
        $updateBest->save(); // Save the changes

        return redirect()->back()->with('success', 'Our best heading was successfully update!!!'); // Redirect back with a success message
    }

    /**
     * Update a specific card.
     */
    public function cardupdate(Request $request, $id)
    {
        // Validate the incoming data
        $request->validate([
            'logo' => 'nullable|image|max:2048', // Optional image file
            'description' => 'required|string',
        ]);

        $aboutBestCard = AboutBestCard::findOrFail($id); // Find the card or fail
        $aboutBestCard->description = $request->input('description'); // Update description

        // Handle logo update
        if ($request->hasFile('logo')) {
            // Delete the old image if exists
            if ($aboutBestCard->logo && Storage::exists($aboutBestCard->logo)) {
                Storage::delete($aboutBestCard->logo); 
            }

            // Store the new image and update the record
            $file = $request->file('logo');
            $fileName = time() . '_' . $file->getClientOriginalName(); // Create a unique file name
            $filePath = $file->storeAs('image', $fileName, 'public'); // Store the file
            $fileURL = Storage::url($filePath); // Get the URL of the stored file

            $aboutBestCard->logo = $fileURL; // Update the logo URL in the database
        }

        $aboutBestCard->save(); // Save the updated card

        return redirect()->route('about.best')->with('success', 'Our best heading was successfully updated!');
    }

    /**
     * Store a new about card.
     */
    public function store(Request $request)
    {
        // Validate the incoming request
        $request->validate([
            'logo' => 'required|image|max:2048', // Required image file
            'description' => 'required|string', // Required string
        ]);

        if ($request->hasFile('logo')) {
            $file = $request->file('logo');
            $fileName = time() . '_' . $file->getClientOriginalName(); // Create a unique file name
            $filePath = $file->storeAs('image', $fileName, 'public'); // Store the file
            $fileURL = Storage::url($filePath); // Get the URL of the stored file
        }

        AboutBestCard::create([
            'logo' => $fileURL,
            'description' => $request->description,
        ]); // Create a new card record

        return redirect()->back()->with('success', 'success !!!'); // Redirect back with a success message
    }

    /**
     * Edit a specific about card.
     */
    public function edit($id)
    {
        $aboutBestCard = AboutBestCard::findOrFail($id); // Find the card or fail
        return view('admin.aboutBesstCardEddit', compact('aboutBestCard')); // Return the edit view with data
    }

    /**
     * Delete a specific about card.
     */
    public function destory($id)
    {
        $aboutbestcard = AboutBestCard::findOrFail($id); // Find the card or fail

        // Check if the logo exists and delete
        if ($aboutbestcard->logo && Storage::exists('public/' . $aboutbestcard->logo)) {
            Storage::delete('public/' . $aboutbestcard->logo); // Delete the image
        }

        $aboutbestcard->delete(); // Delete the card

        return redirect()->back()->with('success', 'our best items delete successfully!!!'); // Redirect back with a success message
    }
}
