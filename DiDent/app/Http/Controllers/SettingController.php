<?php

namespace App\Http\Controllers;

use App\Models\HospitalInfo;
use App\Models\Logo;
use Illuminate\Http\Request;

class SettingController extends Controller
{
    public function index()
    {
        $logo = Logo::latest()->first();
        $hospitalInfo = HospitalInfo::first();
        return view('admin.settings', compact('logo', 'hospitalInfo'));
    }


    public function uploadImage(Request $request)
    {
        $request->validate([
            'file' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        if ($request->hasFile('file')) {
            $file = $request->file('file');
            $fileName = time() . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('uploads'), $fileName);

            // Store the image path in the database
            $image = Logo::create([
                'logo' => 'uploads/' . $fileName,
            ]);

            return response()->json([
                'success' => true,
                'message' => 'Logo was successfully uploaded!',
            ]);
        }

        return response()->json([
            'success' => false,
            'message' => 'File upload failed. Please try again.',
        ], 400);
    }

    public function infoUpdate(Request $request)
    {
        $request->validate([
            'phone' => 'required|numeric|digits_between:7,15',
            'email' => 'required|email',
            'location' => 'required|string|max:255',
            'checkbox' => 'accepted',
        ], [
            // Custom error messages
            'phone.required' => 'The phone number field is required.',
            'phone.numeric' => 'The phone number must be a valid number.',
            'phone.digits_between' => 'The phone number must be between 7 and 15 digits.',
    
            'email.required' => 'The email address is required.',
            'email.email' => 'Please provide a valid email address.',
    
            'location.required' => 'The location field is required.',
            'location.string' => 'The location must be a valid string.',
            'location.max' => 'The location cannot exceed 255 characters.',
            'checkbox.accepted' => 'You must check the box to proceed.',
        ]);
    
        // Fetch the first HospitalInfo record
        $hospitalInfo = HospitalInfo::first();
    
        if ($hospitalInfo) {
            $hospitalInfo->phone = $request->input('phone');
            $hospitalInfo->email = $request->input('email');
            $hospitalInfo->location = $request->input('location');
            $hospitalInfo->save(); // Corrected save method call
    
            return redirect()->back()->with('success', 'Our Hospital Info updated successfully');
        }
    
        // Handle the case where there is no HospitalInfo record
        return redirect()->back()->with('error', 'Hospital info record not found');
    }
    
}
