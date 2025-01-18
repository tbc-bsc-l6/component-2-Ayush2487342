<?php

namespace App\Http\Controllers;

use App\Models\ServiceList;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ServiceListController extends Controller
{
    public function index()
    {
        $serviceItems = ServiceList::orderBy('created_at', 'desc')->get();
        return view('admin.serviceList', compact('serviceItems'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'heading' => 'required|string|max:255',
            'items' => 'required|string|max:255',
            'logo' => 'nullable|image|mimes:jpg,jpeg,png,gif|max:2048',
            'description' => 'required|string',
        ]);

        $logoPath = null;
        if ($request->hasFile('logo')) {
            $logoPath = $request->file('logo')->store('logos', 'public');
        }

        ServiceList::create([
            'heading' => $request->heading,
            'items' => $request->items,
            'logo' => $logoPath,
            'description' => $request->description,
        ]);

        return redirect()->back()->with('success', 'Data stored successfully!');
    }

    public function edit($id)
    {
        $serviceItem = ServiceList::findOrFail($id);
        return view('admin.editServiceItem', compact('serviceItem'));
    }

    public function update(Request $request, $id)
    {
        $serviceItem = ServiceList::findOrFail($id);

        $request->validate([
            'heading' => 'required|string|max:255',
            'items' => 'required|string|max:255',
            'logo' => 'nullable|image|mimes:jpg,jpeg,png,gif|max:2048',
            'description' => 'required|string',
        ]);

        if ($request->hasFile('logo')) {
            // Delete old logo if exists
            if ($serviceItem->logo) {
                Storage::disk('public')->delete($serviceItem->logo);
            }
            $serviceItem->logo = $request->file('logo')->store('logos', 'public');
        }

        $serviceItem->update([
            'heading' => $request->heading,
            'items' => $request->items,
            'description' => $request->description,
            'logo' => $serviceItem->logo,
        ]);

        return redirect()->back()->with('success', 'Service item updated successfully!');
    }

    public function toggleStatus($id)
    {
        $serviceItem = ServiceList::findOrFail($id);
        $serviceItem->status = !$serviceItem->status;
        $serviceItem->save();

        return redirect()->back()->with('success', 'Status updated successfully!');
    }

    public function destroy($id)
    {
        $serviceItem = ServiceList::findOrFail($id);

        if ($serviceItem->logo) {
            Storage::disk('public')->delete($serviceItem->logo);
        }

        $serviceItem->delete();
        return redirect()->back()->with('success', 'Service item deleted successfully!');
    }
}
