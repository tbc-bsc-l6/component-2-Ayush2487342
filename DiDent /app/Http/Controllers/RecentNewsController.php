<?php

namespace App\Http\Controllers;

use App\Models\RecentNews;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class RecentNewsController extends Controller
{
    /**
     * Display all recent news items ordered by creation date descending.
     */
    public function index()
    {
        $recentNews = RecentNews::orderBy('created_at', 'desc')->get(); // Retrieve all news items in descending order of creation
        return view('admin.resentnews', compact('recentNews')); // Return the view with the news items
    }

    /**
     * Store a new news item in the database.
     */
    public function store(Request $request)
    {
        // Validate the request data
        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048', // Validate the image file
            'heading' => 'required|string|max:255', // Validate the heading
            'date' => 'required|date', // Validate the date
            'description' => 'required|string', // Validate the description
        ]);

        // Handle the image upload
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '_' . $image->getClientOriginalName();
            $imagePath = $image->storeAs('image', $imageName, 'public');
            $imageUrl = Storage::url($imagePath); // Store the image and get the URL
        }

        // Create a new news item in the database
        RecentNews::create([
            'image' => $imageUrl ?? null, // Store the image URL or null if not available
            'heading' => $request->heading,
            'date' => $request->date,
            'description' => $request->description,
        ]);

        // Redirect back with a success message
        return redirect()->back()->with('success', 'News successfully added!!!');
    }

    /**
     * Show the form for editing a specific news item.
     */
    public function edit($id)
    {
        $recentNewUpdate = RecentNews::findOrFail($id); // Find the news item by ID or fail
        return view('admin.recentNewsEdit', compact('recentNewUpdate')); // Return the edit view with the news item
    }

    /**
     * Update a specific news item.
     */
    public function update(Request $request, $id)
    {
        // Validate the request data
        $request->validate([
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048', // Validate the optional image file
            'heading' => 'required|string|max:255', // Validate the heading
            'date' => 'required|date', // Validate the date
            'description' => 'required|string', // Validate the description
        ]);

        $recentNewsUpdate = RecentNews::findOrFail($id); // Find the news item by ID or fail

        // Handle the image update
        if ($request->hasFile('image')) {
            // Delete the old image if exists
            if ($recentNewsUpdate->image) {
                $oldImagePath = str_replace('/storage', 'public', $recentNewsUpdate->image);
                Storage::delete($oldImagePath);
            }

            // Upload the new image
            $image = $request->file('image');
            $imageName = time() . '_' . $image->getClientOriginalName();
            $imagePath = $image->storeAs('image', $imageName, 'public');
            $imageUrl = Storage::url($imagePath); // Store the new image and get the URL

            $recentNewsUpdate->image = $imageUrl; // Update the image URL in the database
        }

        // Update the news item fields
        $recentNewsUpdate->heading = $request->input('heading');
        $recentNewsUpdate->date = $request->input('date');
        $recentNewsUpdate->description = $request->input('description');

        // Save the changes
        $recentNewsUpdate->save();

        // Redirect back with a success message
        return redirect()->back()->with('success', 'News successfully updated!');
    }

    /**
     * Delete a specific news item.
     */
    public function destory($id)
    {
        $rn = RecentNews::findOrFail($id); // Find the news item by ID or fail
        $rn->delete(); // Delete the news item

        // Redirect back with a success message
        return redirect()->back()->with('success', 'delete was success!!!');
    }
}
