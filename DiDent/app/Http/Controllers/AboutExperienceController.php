<?php

namespace App\Http\Controllers;

use App\Models\AboutExperience;
use Illuminate\Http\Request;

class AboutExperienceController extends Controller
{
    public function index(){
        $aboutExperience = AboutExperience::orderBy('created_at','Asc')->get();

        return view('admin.experience',compact('aboutExperience'));
    }

    public function store(Request $request){
        $request->validate([
            'from'=>'required|string|max:12',
            'to' => 'required|string|max:55',
        ]);
        AboutExperience::create([
            'from' => $request->from,
            'to' =>$request->to,
        ]);
        return redirect()->back()->with('success','text success insert!!!');
    }

    // Update an existing experience
    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'from' => 'required|string|max:255',
            'to' => 'required|string|max:255',
        ]);

        $experience = AboutExperience::findOrFail($id);
        $experience->update([
            'from' => $validated['from'],
            'to' => $validated['to'],
        ]);

        return redirect()->back()->with('success', 'Experience updated successfully!');
    }

    // Toggle the status of an experience (active/inactive)
    public function updateStatus(Request $request, $id)
    {
        $experience = AboutExperience::findOrFail($id);
        $experience->status = $request->input('status') == 1 ? 1 : 0;

        $experience->save();

        return redirect()->back()->with('success', 'Experience status updated successfully!');
    }

    // Delete an experience
    public function destroy($id)
    {
        $experience = AboutExperience::findOrFail($id);
        $experience->delete();

        return redirect()->back()->with('success', 'Experience deleted successfully!');
    }
}
