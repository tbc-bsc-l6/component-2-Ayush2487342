<?php

namespace App\Http\Controllers;

use App\Models\OpenHour;
use Illuminate\Http\Request;

class OpenHourController extends Controller
{
    public function index()
    {
        $openingHour = OpenHour::orderBy('created_at', 'desc')->get();

        return view('admin.openingHour', compact('openingHour'));
    }

    public function store(Request $request)
    {

        $request->validate([
            'day' => 'required|string|max:25',
            'time' => ['nullable', 'regex:/^(0[0-9]|1[0-9]|2[0-3]):[0-5][0-9]$/'],
            'timeto' => ['nullable', 'regex:/^(0[0-9]|1[0-9]|2[0-3]):[0-5][0-9]$/'],
            'other' => 'nullable|string',
        ], [
            'time.regex' => 'The time must be in the format HH:MM (e.g., 00:00).',
            'timeto.regex' => 'The timeto must be in the format HH:MM (e.g., 00:00).',
        ]);


        OpenHour::create([
            'day' => $request->day,
            'time' => $request->time,
            'timeto' => $request->timeto,
            'other' => $request->other,
        ]);
        return redirect()->back()->with('success', 'Opening hour success!!!');
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'day' => 'required|string|max:25',
            'time' => ['nullable', 'regex:/^(0[0-9]|1[0-9]|2[0-3]):[0-5][0-9]$/'],
            'timeto' => ['nullable', 'regex:/^(0[0-9]|1[0-9]|2[0-3]):[0-5][0-9]$/'],
            'other' => 'nullable|string',
        ], [
            'time.regex' => 'The time must be in the format HH:MM (e.g., 00:00).',
            'timeto.regex' => 'The timeto must be in the format HH:MM (e.g., 00:00).',
        ]);

        $openingHourUpdate = OpenHour::findOrFail($id);
        $openingHourUpdate->day = $request->input('day');
        $openingHourUpdate->time = $request->input('time');
        $openingHourUpdate->timeto = $request->input('timeto');
        $openingHourUpdate->other = $request->input('other');
        $openingHourUpdate->save();
        return redirect()->back()->with('success', 'Opening hour updated success!!!');
    }
}
