<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function showLoginForm()
    {
        return view('login');
    }

    public function login(Request $request)
    {
        $credentials = $request->only('pseudo', 'password');

        if (Auth::attempt($credentials)) {
            // Authentication passed...
            $user = Auth::user();
            if ($user->role === 'admin') {
                return redirect()->route('dashboard');
            } elseif ($user->role === 'client') {
                return redirect()->route('client.dashboard');
            } elseif ($user->role === 'prestataire') {
                return redirect()->route('prestataire.dashboard');
            }
        }

        // Authentication failed...
        return redirect()->back()->with('error', 'Identifiants invalides.');
    }
}
