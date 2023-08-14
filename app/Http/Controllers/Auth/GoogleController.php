<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Laravel\Socialite\Facades\Socialite;
use Illuminate\Support\Facades\Auth;
use App\Models\User;


class GoogleController extends Controller
{
    public function redirectToGoogle()
    {
        return Socialite::driver('google')->redirect();
    }

    public function handleGoogleCallback()
    {
        $socialiteUser = Socialite::driver('google')->user();

        // Check if a user with the Google email already exists
        $user = User::where('email', $socialiteUser->email)->first();

        if (!$user) {
            // Create a new user if not exists
            $user = new User([
                'email' => $socialiteUser->email,
                'name' => $socialiteUser->name, // Adjust this based on your data
                // ... other fields you want to fill
            ]);
            $user->save();
        }

        Auth::login($user); // Authenticate the user

        return redirect()->route('login'); // Redirect to dashboard or any other route
    }
}