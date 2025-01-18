<?php

namespace App\Http\Controllers;

use App\Models\SocialMedia;
use Illuminate\Http\Request;

class SocialMediaController extends Controller
{
    public function index()
    {
        $socialMedia = SocialMedia::first();

        return view('admin.socialmedia', compact('socialMedia'));
    }
    public function update(Request $request)
    {
        // Validate the incoming data, ensure that the URLs are valid
        $request->validate([
            'fb' => 'required|url|regex:/^https:\/\/(www\.)?facebook\.com\//',
            'tw' => 'required|url|regex:/^https:\/\/(www\.)?x\.com\//',  // Updated for new Twitter domain
            'google' => 'required|url|regex:/^https:\/\/(www\.)?google\.com\//',
            'youtube' => 'required|url|regex:/^https:\/\/(www\.)?youtube\.com\//',
        ]);

        // Get the first record in the SocialMedia model
        $socialMediaUpdate = SocialMedia::first();

        // Check if the new data is the same as the old data
        $isUpdated = false;
        if ($socialMediaUpdate->fb !== $request->input('fb')) {
            $socialMediaUpdate->fb = $request->input('fb');
            $isUpdated = true;
        }
        if ($socialMediaUpdate->tw !== $request->input('tw')) {
            $socialMediaUpdate->tw = $request->input('tw');
            $isUpdated = true;
        }
        if ($socialMediaUpdate->google !== $request->input('google')) {
            $socialMediaUpdate->google = $request->input('google');
            $isUpdated = true;
        }
        if ($socialMediaUpdate->youtube !== $request->input('youtube')) {
            $socialMediaUpdate->youtube = $request->input('youtube');
            $isUpdated = true;
        }

        // If there are any changes, save the updates
        if ($isUpdated && $socialMediaUpdate->save()) {
            return redirect()->back()->with('success', 'Social Media Links Updated Successfully!');
        } else {
            // If no changes, show a failure message
            return redirect()->back()->with('error', 'No changes were made or invalid data!');
        }
    }
}
