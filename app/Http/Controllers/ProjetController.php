<?php

namespace App\Http\Controllers;
use Validator;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Projet;
use Illuminate\Support\Facades\DB;

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
        //
        $projet = new Projet;
        $projet->nom = $request->nom;
        $projet->prenom = $request->prenom;
        $projet->email = $request->email;
        $projet->titre = $request->titre;
        $projet->acronyme = $request->acronyme;
        $projet->date_debut = $request->date_debut;
        $projet->date_fin = $request->date_fin;

        $projet->save();

        // $projets = Projet::all();

        return redirect('depot_projet');
        // return redirect()->route('liste_projet')->with(compact(('projets')));
    }

    public function getValidate() {
        return view('dashboard_client.depot_projet');
    }

    public function postValidate(Request $request) {
        $request->validate([
            'fprojet' => 'required',
        ]);
        //  Store data in database

        //  Store data in database
        $data = Projet::all();
        $last_data_object = collect($data)->last();

        $id = $last_data_object['id'];
        $projet = Projet::find($id);
        // $projet->fichier_projet = $request->fprojet;

        if($request->hasfile('fprojet')){
            $file = $request->file('fprojet');
            $filename = time() . '.' . $file->getClientOriginalExtension();
            $file->move('uploads/projets/', $filename);
            $projet->fichier_projet = $filename;
        }

        $projet->save();

        $projets = Projet::all();

        return redirect()->route('validate_projet')->with(compact('projets'));
    }

    public function listeProjets() {

        $projets = Projet::all();

        return view('dashboard_client.liste_projet')->with(compact('projets'));
    }
    // Store Form data in database
    public function AjoutProjet(Request $request)
    {
        // Form validation
        $this->validate($request, [
            'titre' => 'required',
            'date_debut' => 'required',
            'date_fin' => 'required'
        ]);

        //  Store data in database
        $projet = new Projet;
        $projet->titre = $request->titre;
        $projet->date_debut = $request->date_debut;
        $projet->date_fin = $request->date_fin;

        $projet->save();

        $projets = Projet::all();
        //

        // return view('dashboard_client.depot_projet');
        return redirect()->route('liste_projet')->with(compact('projets'));
    }


    public function edit($projet_id) {
        $projets = Projet::all();
        $projet = Projet::find($projet_id);
        return view('dashboard_client.liste_projet', compact('projets','projet'));
    }

    public function updateProjet(Request $request) {
        $data = $request->all();
        $projet_id = $data['id'];

        $projet = Projet::find($projet_id);

        if($projet){
            $projet->titre = $data['titre'];
            $projet->date_debut = $data['date_debut'];
            $projet->date_fin = $data['date_fin'];

            $projet->update();
            return redirect()->route('liste_projet');
        }
        return redirect()->route('liste_projet');
    }

    public function delete($id)
    {
        $projet = Projet::find($id);
        unlink("uploads/projets/".$projet->fichier_projet);
        $projet->delete();
        return redirect()->route('liste_projet')
            ->with('success','projet has been deleted successfully');
    }
}
