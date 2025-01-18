<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileUpdateRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;
use App\Models\User;

class ProfileController extends Controller
{
    /**
     * Handle an authentication attempt.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        // Validate the login request
        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials, $request->filled('remember'))) {
            // Check if the user is an admin (role = 2)
            $user = Auth::user();

            if ($user->role == 2) {
                // Redirect admins to the dashboard
                return redirect()->intended('admin.dashboard');
            } else {
                // For regular users (role = 1), redirect to a specific route or show a message
                return redirect()->route('home')->with('status', 'You are not an admin.');
            }
        }

        // If authentication fails, redirect back with an error message
        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ]);
    }
    /**
     * Display the user's profile form.
     */
    public function edit(Request $request): View
    {
        return view('admin.adminProfile', [
            'user' => $request->user(),
        ]);
    }

    /**
     * Update the user's profile information.
     */
    public function update(ProfileUpdateRequest $request): RedirectResponse
    {
        $request->user()->fill($request->validated());

        if ($request->user()->isDirty('email')) {
            $request->user()->email_verified_at = null;
        }

        $request->user()->save();

        return Redirect::route('profile.edit')->with('status', 'profile-updated');
    }

    /**
     * Delete the user's account.
     */
    public function destroy(Request $request): RedirectResponse
    {
        $request->validateWithBag('userDeletion', [
            'password' => ['required', 'current_password'],
        ]);

        $user = $request->user();

        Auth::logout();

        $user->delete();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return Redirect::to('/');
    }

    public function updatePassword(Request $request)
    {
        // Validate the input
        $request->validate([
            'current_password' => ['required'],
            'dpassword' => ['required', 'confirmed', 'min:6'],
            'dpassword_confirmation' => 'required|same:dpassword', // Correct reference to dpassword
        ]);
    
        $user = Auth::user();
    
        // Check if the provided current password matches the stored password
        if (!Hash::check($request->current_password, $user->password)) {
            return Redirect::back()->withErrors(['current_password' => 'The current password is incorrect.']);
        }
    
        // Update the password
        $user->password = Hash::make($request->dpassword);
        $user->save();
    
        return Redirect::back()->with('status', 'Password updated successfully!');
    }
    
    
}
