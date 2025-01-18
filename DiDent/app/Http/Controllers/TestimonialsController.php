<?php

namespace App\Http\Controllers;

use App\Models\SocialMedia;
use App\Models\TestimonialFeedback;
use App\Models\Testimonials;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class TestimonialsController extends Controller
{
    public function index()
    {
        $rateings = Testimonials::orderBy('created_at', 'desc')->get();

        return view('admin.testimonial', compact('rateings'));
    }
    public function showMedia()
    {
        $socialMedia = SocialMedia::first() ?? null; // Ensure $socialMedia is not an array
        return view('admin.mediaReviews', compact('socialMedia'));
    }

    public function reviewShow()
    {
        $rateings = Testimonials::orderBy('created_at', 'desc')->take(4)->get();


        return view('admin.addReviews', compact('rateings'));
    }

    public function store(Request $request)
    {
        // Validate form inputs
        $request->validate([
            'profile' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048', // Max 2MB file size
            'name' => 'required|string|max:255',
            'date' => 'required|date',
            'rateing' => 'required|numeric|min:1|max:5', // Rating between 1 and 5
            'description' => 'required|string|max:400',
        ]);

        // Handle profile picture upload
        $profilePath = null;
        if ($request->hasFile('profile')) {
            $profile = $request->file('profile');
            $profileName = time() . '_' . $profile->getClientOriginalName();
            $profilePath = $profile->storeAs('profile_pictures', $profileName, 'public');
        }

        // Store data in the database
        Testimonials::create([
            'profile' => $profilePath ? Storage::url($profilePath) : null,
            'name' => $request->name,
            'date' => $request->date,
            'rateing' => $request->rateing,
            'description' => $request->description,
        ]);

        return redirect()->back()->with('success', 'Review successfully added!');
    }
    public function destory($id)
    {
        $reviewsDelete = Testimonials::findOrFail($id);
        $reviewsDelete->delete();
        return redirect()->back()->with('success', 'review was successfully delete');
    }
}
