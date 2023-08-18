<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;

use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function showLoginForm()
    {
        return view('login');
    }

    public function login(LoginRequest $loginRequest)
    {
        $credentials = $loginRequest->validated();

        // dd($credentials);

        if (Auth::attempt($credentials)) {
            // Authentication passed...
            $user = Auth::user();
            // dd($user);
            if ($user->role === 'admin') {
                return redirect()->route('dashboard', ['user' => $user]);
            } elseif ($user->role === 'client') {
                // dd($user);
                return view('chargement');
            } elseif ($user->role === 'prestataire') {
                return redirect()->route('prestataire.dashboard', ['user' => $user]);
            }
        }

        // Authentication failed...
        return redirect()->back()->with('error', 'Identifiants invalides.');
    }

    public function logout()
    {
        Auth::logout();
        return to_route('login.form')->with('success', 'Vous êtes maintenant déconnecté.');
    }
}