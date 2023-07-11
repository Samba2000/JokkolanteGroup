<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class InscriptionController extends Controller
{
    public function showRegistrationForm()
    {
        return view('inscription');
    }

    public function register(Request $request)
    {
        // Valider les données du formulaire
        $validatedData = $request->validate([
            'email' => 'required|email|unique:users',
            'pseudo' => 'required|unique:users',
            'password' => 'required|min:6',
        ]);

        // Créer un nouvel utilisateur
        $user = new User;
        $user->email = $request->email;
        $user->pseudo = $request->pseudo;
        $user->password = bcrypt($request->password);
        // Ajoutez d'autres champs d'utilisateur si nécessaire

        // Enregistrer l'utilisateur dans la base de données
        $user->save();

        // Rediriger l'utilisateur vers la page de connexion ou toute autre page appropriée
        return redirect()->route('login');
    }
}