<?php

namespace App\Http\Controllers;

use App\Models\AboutClinic;
use Illuminate\Http\Request;

class DentailClinicController extends Controller
{
    public function index()
    {
        $clinic = AboutClinic::first();

        return view('admin.aboutClinic',compact('clinic'));
    }

    public function update(Request $request)
    {
        $request->validate([
            'heading' => 'required|string|max:255',
            'description' => 'required|string|max:255',
            'paragraph' => 'required|string',
        ]);
        $clinicUpdate = AboutClinic::firstOrFail();
        $clinicUpdate->heading = $request->input('heading');
        $clinicUpdate->description = $request->input('description');
        $clinicUpdate->paragraph = $request->input('paragraph');
        $clinicUpdate->save();
        return redirect()->back()->with('success','text update successfull!!!');
    }
}
