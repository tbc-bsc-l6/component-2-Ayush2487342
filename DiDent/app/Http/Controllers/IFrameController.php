<?php

namespace App\Http\Controllers;

use App\Models\IFrame;
use Illuminate\Http\Request;

class IFrameController extends Controller
{
    public function index()
    {
        $iframe = IFrame::first();
        return view('admin.iframe',compact('iframe'));
    }

    public function update(Request $request)
    {

        $iframeUpdate = IFrame::firstOrFail();
        $iframeUpdate->iframe = $request->input('iframe');
        $iframeUpdate->save();
        return redirect()->back();
    }
}
