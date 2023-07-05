<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProjetValidateController extends Controller
{
    public function getValidate() {
        return view('dashboard_client.depot_projet');
    }

    public function postValidate(Request $request) {
        $request->validate([
            'Fprojet' => 'required',
            'cond1' => 'required',
            'cond2' => 'required'
        ]);
        //  Store data in database
        //'App\Models\Etudiant'::create($request->all());
        //

        // return view('dashboard_client.validate_projet');
        return redirect('validate_projet')->with('success', 'Votre formulaire a été soumis.');
    }
}
