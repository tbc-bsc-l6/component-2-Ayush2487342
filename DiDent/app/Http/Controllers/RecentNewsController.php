<?php

namespace App\Http\Controllers;

use App\Models\RecentNews;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class RecentNewsController extends Controller
{
    public function index()
    {
        $recentNews = RecentNews::orderBy('created_at', 'desc')->get();
        return view('admin.resentnews', compact('recentNews'));
    }

    public function store(Request $request)
    {
        // Validate form inputs
        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048', // Max 2MB file size
            'heading' => 'required|string|max:255',
            'date' => 'required|date',
            'description' => 'required|string',
        ]);

        // Handle image upload
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '_' . $image->getClientOriginalName();
            $imagePath = $image->storeAs('image', $imageName, 'public');
            $imageUrl = Storage::url($imagePath);
        }

        // Store data in the database
        RecentNews::create([
            'image' => $imageUrl ?? null, // Use null if the image wasn't uploaded
            'heading' => $request->heading,
            'date' => $request->date,
            'description' => $request->description,
        ]);

        return redirect()->back()->with('success', 'News successfully added!!!');
    }

    public function edit($id)
    {
        $recentNewUpdate = RecentNews::findOrFail($id);
        return view('admin.recentNewsEdit', compact('recentNewUpdate'));
    }
    public function update(Request $request, $id)
    {
        // Validate form inputs
        $request->validate([
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048', // Max 2MB file size
            'heading' => 'required|string|max:255',
            'date' => 'required|date',
            'description' => 'required|string',
        ]);

        // Find the existing news item
        $recentNewsUpdate = RecentNews::findOrFail($id);

        // Handle image update
        if ($request->hasFile('image')) {
            // Delete the old image if it exists
            if ($recentNewsUpdate->image) {
                $oldImagePath = str_replace('/storage', 'public', $recentNewsUpdate->image);
                Storage::delete($oldImagePath);
            }

            // Upload the new image
            $image = $request->file('image');
            $imageName = time() . '_' . $image->getClientOriginalName();
            $imagePath = $image->storeAs('image', $imageName, 'public');
            $imageUrl = Storage::url($imagePath);

            // Update the image URL in the database
            $recentNewsUpdate->image = $imageUrl;
        }

        // Update other fields
        $recentNewsUpdate->heading = $request->input('heading');
        $recentNewsUpdate->date = $request->input('date');
        $recentNewsUpdate->description = $request->input('description');

        // Save the changes
        $recentNewsUpdate->save();

        return redirect()->back()->with('success', 'News successfully updated!');
    }


    public function destory($id)
    {

        $rn = RecentNews::findOrFail($id);
        $rn->delete();
        return redirect()->back()->with('success', 'delete was success!!!');
    }
}
