<?php

namespace App\Http\Requests\Auth;

use Illuminate\Auth\Events\Lockout;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\RateLimiter;
use Illuminate\Support\Str;
use Illuminate\Validation\ValidationException;

class LoginRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     * Always returns true, allowing any user to attempt a login.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     * Defines the validation rules for the 'email' and 'password' fields.
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'email' => ['required', 'string', 'email'],  // Validates that the email is required, must be a string, and must be a valid email address
            'password' => ['required', 'string'],       // Validates that the password is required and must be a string
        ];
    }

    /**
     * Attempt to authenticate the request's credentials.
     * If authentication fails, a rate limit hit is recorded and a validation exception is thrown.
     * @throws \Illuminate\Validation\ValidationException
     */
    public function authenticate(): void
    {
        $this->ensureIsNotRateLimited();

        if (! Auth::attempt($this->only('email', 'password'), $this->boolean('remember'))) {
            RateLimiter::hit($this->throttleKey());

            throw ValidationException::withMessages([
                'email' => trans('auth.failed'),  // Return error message for failed authentication
            ]);
        }

        RateLimiter::clear($this->throttleKey());  // Clear the rate limiting for this key if authentication is successful
    }

    /**
     * Ensure the login request is not rate limited.
     * Checks if there have been too many failed attempts; if so, throws a validation exception.
     * @throws \Illuminate\Validation\ValidationException
     */
    public function ensureIsNotRateLimited(): void
    {
        if (! RateLimiter::tooManyAttempts($this->throttleKey(), 5)) {
            return;  // No action taken if rate limits have not been exceeded
        }

        event(new Lockout($this));  // Fire a lockout event if too many attempts

        $seconds = RateLimiter::availableIn($this->throttleKey());  // Get the time until the rate limiter resets

        throw ValidationException::withMessages([
            'email' => trans('auth.throttle', [
                'seconds' => $seconds,
                'minutes' => ceil($seconds / 60),
            ]),
        ]);  // Throw validation exception with the time until available
    }

    /**
     * Get the rate limiting throttle key for the request.
     * The key is based on the user's email and IP address.
     */
    public function throttleKey(): string
    {
        return Str::transliterate(Str::lower($this->string('email')).'|'.$this->ip());  // Generate a unique key for the user based on email and IP
    }
}
