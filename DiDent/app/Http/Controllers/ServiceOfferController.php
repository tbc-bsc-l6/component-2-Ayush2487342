<?php

namespace App\Http\Controllers;

use App\Models\ServiceOffer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ServiceOfferController extends Controller
{
    public function index()
    {
        $serviceOfferTitle = ServiceOffer::first();
        return view('admin.serviceOffer', compact('serviceOfferTitle'));
    }
    public function update(Request $request)
    {
        // Validate the form input
        $request->validate([
            'heading' => 'required|string|max:255',
            'description' => 'required|string|max:600',
            'logo' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
        ]);

        // Find the service offer by id
        $serviceOffer = ServiceOffer::firstOrFail();

        // Handle logo file upload
        if ($request->hasFile('logo')) {
            // Delete old logo if it exists
            if ($serviceOffer->logo && Storage::exists($serviceOffer->logo)) {
                Storage::delete($serviceOffer->logo);
            }

            // Store new logo and get its path
            $logoPath = $request->file('logo')->store('logos', 'public');
        } else {
            // Keep the old logo if no new file is uploaded
            $logoPath = $serviceOffer->logo;
        }

        // Update service offer data
        $serviceOffer->update([
            'heading' => $request->input('heading'),
            'description' => $request->input('description'),
            'logo' => $logoPath,  // Store the new logo path
        ]);

        // Flash success message
        return redirect()->back()->with('success', 'Service offer updated successfully.');
    }

    
}
