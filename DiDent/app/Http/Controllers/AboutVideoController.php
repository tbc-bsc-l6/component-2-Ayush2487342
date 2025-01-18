<?php

namespace App\Http\Controllers;

use App\Models\AboutVideo;
use Illuminate\Http\Request;

class AboutVideoController extends Controller
{
    public function index()
    {
        // Get the current video URL from the database
        $videoURL = AboutVideo::first();

        return view('admin.aboutVideo', compact('videoURL'));
    }
    public function update(Request $request)
    {
        $request->validate([
            'video' => [
                'required',
                'url',
                'regex:/^(https?\:\/\/)?(www\.youtube\.com|youtu\.be)\/.+$/i',
            ],
        ]);

        $url = $request->input('video');
        $videoId = '';

        // Extract video ID from YouTube URL
        if (preg_match('/(?:https?:\/\/)?(?:www\.)?(?:youtube\.com\/(?:watch\?v=|embed\/)|youtu\.be\/)([a-zA-Z0-9_-]+)/', $url, $matches)) {
            $videoId = $matches[1];
        }

        if ($videoId) {
            $embedUrl = "https://www.youtube.com/embed/$videoId";

            $aboutVideoUpdate = AboutVideo::firstOrFail();
            $aboutVideoUpdate->video = $embedUrl; // Save the embed URL
            $aboutVideoUpdate->save();

            return redirect()->back()->with('success', 'New video successfully updated');
        }

        return redirect()->back()->with('error', 'Invalid YouTube video URL');
    }
}
