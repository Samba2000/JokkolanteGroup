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
        // dd($loginRequest->has('souvenir'));
        $credentials = $loginRequest->validated();

        // dd($credentials);

        if (Auth::attempt($credentials)) {
            // Auth::attempt($credentials, $loginRequest->has('souvenir'));
            // Authentication passed...
            $user = Auth::user();
            // dd($user);
            if ($user->role === 'admin') {
                return view('chargement', ['souvenir' => $loginRequest->has('souvenir')]);
            } elseif ($user->role === 'client') {
                // dd($user);
                return view('chargement', ['souvenir' => $loginRequest->has('souvenir')]);
            } elseif ($user->role === 'prestataire') {
                return view('chargement', ['souvenir' => $loginRequest->has('souvenir')]);
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

    public function apresConnexion()
    {
        return redirect()->intended('dashboard');
    }
}
