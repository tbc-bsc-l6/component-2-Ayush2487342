<?php

namespace App\Http\Controllers;

use App\Models\UserContact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redis;

class UserContactController extends Controller
{
    public function index()
    {
        $userContacts = UserContact::orderBy('created_at', 'desc')->get();
        return view('admin.userContact', compact('userContacts'));
    }

    public function updateStatus(Request $request, $userId, $status)
    {
        $userContact = UserContact::findOrFail($userId);
        $userContact->status = $status;  // Update the status with the passed value
        $userContact->save();

        return redirect()->back()->with('success', 'toogle status success!!!');
    }
    public function delete($userId)
    {
        $userData = UserContact::findOrFail($userId);
        $userData->delete();
        return redirect()->back()->with('success', 'user information delete');
    }
}
