<?php

namespace App\Http\Controllers;

use App\Models\AboutBest;
use App\Models\AboutProblem;
use Illuminate\Http\Request;

class AboutProblemController extends Controller
{
    public function index(){

        $aboutProblem = AboutProblem::first();
        return view('admin.aboutProblem',compact('aboutProblem'));
    }

    public function update(Request $request){

        $request->validate([
            'heading' => 'required|string|max:255',
            'descriptoin' => 'required|string',
        ]);

        $aboutProblemUpdate = AboutProblem::firstOrFail();
        $aboutProblemUpdate->heading = $request->input('heading');
        $aboutProblemUpdate->descriptoin = $request->input('descriptoin');
        $aboutProblemUpdate->save();
        return redirect()->back()->with('success','about problem successfully update');

    }
}
