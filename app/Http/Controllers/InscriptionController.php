<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Validator;

class InscriptionController extends Controller
{
    public function showRegistrationForm()
    {
        return view('inscription');
    }

    public function enregistrerRole(Request $request)
    {
        $role = $request->input('role');

        // Enregistrer le rôle dans la base de données pour l'utilisateur actuel
        // Assurez-vous que l'utilisateur est authentifié avant de faire cette mise à jour

        $user = auth()->user();
        $user->role = $role;
        $user->save();

        // Répondre avec une réponse JSON ou une redirection selon vos besoins
        // Par exemple, si vous préférez une réponse JSON, vous pouvez retourner
        // return response()->json(['success' => true]);

        // Si vous préférez une redirection, vous pouvez utiliser
        return redirect()->route('login');
    }

    public function register(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => 'required|email|unique:users',
            'pseudo' => 'required|unique:users',
            'password' => 'required|min:8',
            'role' => 'required|in:client,prestataire',
        ], [
            'email.required' => 'L\'adresse e-mail est obligatoire.',
            'email.email' => 'L\'adresse e-mail doit être valide.',
            'email.unique' => 'Cette adresse e-mail est déjà utilisée.',
            'pseudo.required' => 'Le pseudo est obligatoire.',
            'pseudo.unique' => 'Ce pseudo est déjà utilisé.',
            'password.required' => 'Le mot de passe est obligatoire.',
            'password.min' => 'Le mot de passe doit contenir au moins 8 caractères.',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'errors' => $validator->errors()
            ]);
        }

        // If validation passes, create the user and save to the database
        $user = new User;
        $user->email = $request->input('email');
        $user->pseudo = $request->input('pseudo');
        $user->password = bcrypt($request->input('password'));
        $user->role = $request->input('role');
        $user->save();

        return response()->json([
            'success' => true
        ]);
    }
}