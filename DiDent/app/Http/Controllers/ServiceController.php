<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function index()
    {
        $service = Service::first();

        return view('admin.service',compact('service'));
    }
    public function update(Request $request)
    {
        $request->validate([
            'description' => 'required|string|max:255',
        ]);
        $serviceUpdate = Service::first();
        $serviceUpdate->description = $request->input('description');
        $serviceUpdate->save();
        return redirect()->back()->with('success', 'updated successfully !!!');
    }
}
