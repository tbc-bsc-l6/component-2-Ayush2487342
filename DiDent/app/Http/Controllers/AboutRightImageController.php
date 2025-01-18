<?php

namespace App\Http\Controllers;

use App\Models\AboutRightImage;
use Illuminate\Http\Request;

use function Ramsey\Uuid\v1;

class AboutRightImageController extends Controller
{
    public function index()
    {

        $rightImage = AboutRightImage::first();
        return view('admin.AboutRightImage', compact('rightImage'));
    }
    public function edit($image)
    {
        $rightImage = AboutRightImage::findOrFail(1); // Assuming a single ID in the database
        return view('admin.rightImageEdit', compact('rightImage', 'image'));
    }

    public function update(Request $request, $image)
    {
        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $rightImage = AboutRightImage::findOrFail(1);

        if ($request->hasFile('image')) {
            $fileName = time() . '.' . $request->image->extension();
            $request->image->move(public_path('uploads'), $fileName);

            $rightImage->$image = 'uploads/' . $fileName;
            $rightImage->save();
        }

        return redirect()->route('rightImage.edit', ['image' => $image])->with('success', 'Image updated successfully!');
    }
}
