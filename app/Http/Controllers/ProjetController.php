<?php

namespace App\Http\Controllers;
use Validator;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Nette\Utils\Validators;

class ProjetController extends Controller
{
    // Create Form
    public function createProjetForm()
    {
        return view('dashboard_client.create_projet');
    }
    // Store Form data in database
    public function store(Request $request)
    {
        // Form validation
        $this->validate($request, [
            'nom' => 'required',
            'prenom' => 'required',
            'email' => 'required|email',
            'titre' => 'required',
            'acronyme' => 'required',
            'date_debut' => 'required',
            'date_fin' => 'required'
        ]);
        //  Store data in database
        //'App\Models\Etudiant'::create($request->all());
        //

        // return view('dashboard_client.depot_projet');
        return redirect('depot_projet')->with('success', 'Votre formulaire a été soumis.');
    }
}
