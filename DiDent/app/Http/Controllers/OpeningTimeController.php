<?php

namespace App\Http\Controllers;

use App\Models\OpeningTime;
use Illuminate\Http\Request;

class OpeningTimeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $openingTime = OpeningTime::first();
        return view('admin.openingTime', compact('openingTime'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(OpeningTime $openingTime)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(OpeningTime $openingTime)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, OpeningTime $openingTime)
    {
        // Validate input fields
        $request->validate([
            'day1' => 'required|string|max:255',
            'day2' => 'required|string|max:255',
        ]);
    
        // Check if data is unchanged
        if (
            $openingTime->day1 === $request->input('day1') &&
            $openingTime->day2 === $request->input('day2')
        ) {
            return redirect()->back()->with('info', 'No changes detected. Opening day was not updated.');
        }
    
        // Update data
        $openingTime->day1 = $request->input('day1');
        $openingTime->day2 = $request->input('day2');
    
        // Save and return appropriate message
        if ($openingTime->save()) {
            return redirect()->back()->with('success', 'Opening time updated successfully.');
        } else {
            return redirect()->back()->with('error', 'Failed to update opening time. Please try again.');
        }
    }
    
    

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(OpeningTime $openingTime)
    {
        //
    }
}
