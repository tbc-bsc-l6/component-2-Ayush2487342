<?php

namespace App\Http\Controllers;

use App\Models\HospitalInfo;
use App\Models\IFrame;
use App\Models\Logo;
use App\Models\OpenHour;
use App\Models\OpeningTime;
use App\Models\SocialMedia;
use App\Models\UserContact;
use Illuminate\Http\Request;

class ContactPageController extends Controller
{
    public function index()
    {

        $openTime = OpeningTime::orderBy('updated_at', 'desc')->first();
        $hospitalInfo = HospitalInfo::first();
        $socialMedia = SocialMedia::first();
        $logo = Logo::orderBy('updated_at', 'desc')->first();
        $iframe = IFrame::orderBy('updated_at', 'desc')->first();
        $openHr = OpenHour::orderBy('created_at', 'desc')->get();

        return view('contact', compact('openTime', 'hospitalInfo', 'socialMedia', 'logo', 'iframe', 'openHr'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'posName'  => 'required|string|max:255',
            'posEmail' => 'required|email',
            'posTel'   => 'required|numeric|digits_between:7,15',
            'posText'  => 'required|string|max:255',
        ]);

        UserContact::create([
            'name' => $request->posName,
            'email' => $request->posEmail,

            'phone' => $request->posTel,
            'message' => $request->posText,
        ]);

        // Process the validated data
        return redirect()->back()->with('success', 'Your message has been submitted successfully!');
    }
}
