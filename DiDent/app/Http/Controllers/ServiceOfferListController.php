<?php

namespace App\Http\Controllers;

use App\Models\ServiceOfferList;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage; // Add this line


class ServiceOfferListController extends Controller
{
    public function index()
    {
        $serviceOfferLists = ServiceOfferList::orderBy('created_at', 'desc')->get();
        return view('admin.serviceOfferList', compact('serviceOfferLists'));
    }

    public function store(Request $request)
    {
        // Validate the request
        $validated = $request->validate([
            'heading' => 'required|string|max:255',
            'description' => 'required|string|max:600',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        // Store the image if provided
        $imagePath = null;
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('image', 'public');
        }

        // Save the data to the database
        ServiceOfferList::create([
            'heading' => $validated['heading'],
            'description' => $validated['description'],
            'image' => $imagePath,
        ]);

        // Redirect back with a success message
        return redirect()->back()->with('success', 'Service Offer added successfully!');
    }

    public function edit($id)
    {
        $serviceOffer = ServiceOfferList::findOrFail($id);
        return view('admin.service_offer_edit', compact('serviceOffer'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'heading' => 'required|string|max:255',
            'description' => 'required',
            'image' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
        ]);

        $serviceOffer = ServiceOfferList::findOrFail($id);

        // Update the old image if a new one is uploaded
        if ($request->hasFile('image')) {
            // Delete old image
            if ($serviceOffer->image && \Storage::exists('public/' . $serviceOffer->image)) {
                \Storage::delete('public/' . $serviceOffer->image);
            }

            // Store new image
            $filePath = $request->file('image')->store('service_offers', 'public');
            $serviceOffer->image = $filePath;
        }

        $serviceOffer->heading = $request->heading;
        $serviceOffer->description = $request->description;
        $serviceOffer->save();

        return redirect()->back()->with('success', 'Service Offer updated successfully.');
    }

    public function toggleStatus($id)
    {
        $serviceOffer = ServiceOfferList::findOrFail($id);
        $serviceOffer->status = !$serviceOffer->status; // Toggle the status
        $serviceOffer->save();

        return redirect()->back()->with('success', 'Status updated successfully.');
    }

    public function delete($id)
    {
        $serviceOffer = ServiceOfferList::findOrFail($id);

        // Delete the old image from storage
        if ($serviceOffer->image && \Storage::exists('public/' . $serviceOffer->image)) {
            \Storage::delete('public/' . $serviceOffer->image);
        }

        $serviceOffer->delete();

        return redirect()->back()->with('success', 'Service Offer deleted successfully.');
    }
}
