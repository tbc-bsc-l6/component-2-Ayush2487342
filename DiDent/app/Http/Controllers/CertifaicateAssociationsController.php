<?php

namespace App\Http\Controllers;

use App\Models\CertifaicateAssociations;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class CertifaicateAssociationsController extends Controller
{
    public function index()
    {
        $ca = CertifaicateAssociations::orderBy('created_at', 'desc')->get();

        return view('admin.certifacicateAssociation', compact('ca'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg|max:2048',
        ]);
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $file_Name = time() . '_' . $file->getClientOriginalName();
            $filePath = $file->storeAs('image', $file_Name, 'public');
            $fileUrl = Storage::url($filePath);
        }
        CertifaicateAssociations::create([
            'image' => $fileUrl,
        ]);
        return redirect()->back()->with('success', 'certifacicate association successfully uploaded!!!');
    }
    public function destory($id)
    {

        $certifaicate = CertifaicateAssociations::findOrFail($id);
        // Check if the file exists in the 'storage/app/public' directory and delete it
        if ($certifaicate->image && Storage::exists('public' . $certifaicate->image)) {
            Storage::delete('public/' . $certifaicate->image);
        }
        $certifaicate->delete();
        return redirect()->back()->with('success', 'delete successfully !!!');
    }

    public function toggleUpdate($id)
    {
        $cas = CertifaicateAssociations::find($id);
        if ($cas) {
            $cas->status = $cas->status == 1 ? 0 : 1; // Toggle between 1 and 0
            $cas->save();

            return redirect()->back()->with('success','toogel status update success');
        }

    }
}
