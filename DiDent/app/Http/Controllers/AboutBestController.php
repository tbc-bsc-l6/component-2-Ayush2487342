<?php

namespace App\Http\Controllers;

use App\Models\AboutBest;
use App\Models\AboutBestCard;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AboutBestController extends Controller
{
    public function index()
    {
        $aboutBest = AboutBest::first();
        $aboutBestCard = AboutBestCard::all();
        return view('admin.aboutBest', compact('aboutBest', 'aboutBestCard'));
    }
    public function update(Request $request)
    {
        $request->validate([
            'heading' => 'required|string|max:100'
        ]);
        $updateBest = AboutBest::firstOrFail();
        $updateBest->heading = $request->input('heading');
        $updateBest->save();
        return redirect()->back()->with('success', 'Our best heating was successfully update!!!');
    }
    public function cardupdate(Request $request, $id)
    {
        // Validate the incoming data
        $request->validate([
            'logo' => 'nullable|image|max:2048', // Allow nullable logo and validate image
            'description' => 'required|string',
        ]);

        // Find the record
        $aboutBestCard = AboutBestCard::findOrFail($id);
        $aboutBestCard->description = $request->input('description');

        // Handle logo update
        if ($request->hasFile('logo')) {
            // Delete the existing image if it exists
            if ($aboutBestCard->logo && Storage::exists($aboutBestCard->logo)) {
                Storage::delete($aboutBestCard->logo); // Delete the old image
            }

            // Store the new image in the storage/image folder
            $file = $request->file('logo'); // Get the uploaded file
            $fileName = time() . '_' . $file->getClientOriginalName(); // Generate a unique file name
            $filePath = $file->storeAs('image', $fileName, 'public'); // Save in storage/app/public/image folder
            $fileURL = Storage::url($filePath);

            // Save the relative path in the database (e.g., "image/filename.jpg")
            $aboutBestCard->logo = $fileURL;
        }

        // Save the updated record
        $aboutBestCard->save();

        // Redirect with success message
        return redirect()->route('about.best')->with('success', 'Our best heading was successfully updated!');
    }


    public function store(Request $request)
    {

        $request->validate([
            'logo' => 'required|image|max:2048', // Validate the image file
            'description' => 'required|string',
        ]);
        if ($request->hasFile('logo')) {
            $file = $request->file('logo');
            $fileName = time() . '_' . $file->getClientOriginalName();
            $filePath = $file->storeAs('image', $fileName, 'public');
            $fileURL = Storage::url($filePath);
        }
        AboutBestCard::create([
            'logo' => $fileURL,
            'description' => $request->description,
        ]);
        return redirect()->back()->with('success', 'success !!!');
    }
    public function edit($id)
    {
        $aboutBestCard = AboutBestCard::findOrFail($id);
        return view('admin.aboutBesstCardEddit', compact('aboutBestCard'));
    }

    public function destory($id)
    {

        $aboutbestcard = AboutBestCard::findOrFail($id);
        if ($aboutbestcard->logo && Storage::exists('public/' . $aboutbestcard->logo)) {
            Storage::delete('public/' . $aboutbestcard->logo);
        }
        $aboutbestcard->delete();
        return redirect()->back()->with('success', 'our best items delete successfully!!!');
    }
}
