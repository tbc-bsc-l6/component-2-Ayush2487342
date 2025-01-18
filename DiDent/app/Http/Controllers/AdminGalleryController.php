<?php

namespace App\Http\Controllers;

use App\Models\Gallery;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\URL;

class AdminGalleryController extends Controller
{
    public function index()
    {
        $gallery = Gallery::orderBy('created_at','desc')->get();

        return view('admin.gallery',compact('gallery'));

    }
    public function store(Request $request)
    {
        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg|max:2048',
        ]);

        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $fileName = time() . '_' . $file->getClientOriginalName();
            $filePath = $file->storeAs('images', $fileName, 'public');
            $fileUrl = Storage::url($filePath);
        }

        Gallery::create([
            'image' => $fileUrl ?? null,
        ]);

        return redirect()->back()->with('success', 'Image successfully uploaded!');
    }
}
