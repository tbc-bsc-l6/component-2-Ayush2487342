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
     * Authenticate and handle the user's login request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        // Validate the login credentials
        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials, $request->filled('remember'))) {
            // Check user role after login
            $user = Auth::user();

            if ($user->role == 2) {
                // Redirect admins to the admin dashboard
                return redirect()->intended('admin.dashboard');
            } else {
                // Non-admin users are redirected with a status message
                return redirect()->route('home')->with('status', 'You are not an admin.');
            }
        }

        // If login fails, redirect back with error
        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ]);
    }

    /**
     * Display the profile edit form.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\View\View
     */
    public function edit(Request $request): View
    {
        // Return the profile edit view with user data
        return view('admin.adminProfile', [
            'user' => $request->user(),
        ]);
    }

    /**
     * Update user profile details.
     *
     * @param ProfileUpdateRequest $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(ProfileUpdateRequest $request): RedirectResponse
    {
        // Update user profile
        $request->user()->fill($request->validated());

        // Check and handle changes to the email
        if ($request->user()->isDirty('email')) {
            $request->user()->email_verified_at = null;
        }

        // Save the updated user
        $request->user()->save();

        // Redirect back to profile edit route with status
        return Redirect::route('profile.edit')->with('status', 'profile-updated');
    }

    /**
     * Handle the deletion of the user account.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(Request $request): RedirectResponse
    {
        // Validate the password confirmation before account deletion
        $request->validateWithBag('userDeletion', [
            'password' => ['required', 'current_password'],
        ]);

        $user = $request->user();

        // Logout the user
        Auth::logout();

        // Delete the user account
        $user->delete();

        // Invalidate the session and regenerate token
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        // Redirect to the homepage
        return Redirect::to('/');
    }

    /**
     * Update the user's password.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function updatePassword(Request $request)
    {
        // Validate the password update fields
        $request->validate([
            'current_password' => ['required'],
            'dpassword' => ['required', 'confirmed', 'min:6'],
            'dpassword_confirmation' => 'required|same:dpassword', // Confirm password matches
        ]);
    
        $user = Auth::user();
    
        // Verify current password matches before updating
        if (!Hash::check($request->current_password, $user->password)) {
            return Redirect::back()->withErrors(['current_password' => 'The current password is incorrect.']);
        }
    
        // Update and save new password
        $user->password = Hash::make($request->dpassword);
        $user->save();
    
        // Redirect back with success message
        return Redirect::back()->with('status', 'Password updated successfully!');
    }
}
