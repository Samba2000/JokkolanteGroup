<?php

namespace App\Http\Controllers;

use Validator;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Projet;
use Carbon\Carbon;
use Illuminate\Validation\Rules\Exists;

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
        $errors = array();
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

        $taille_fichier = filesize($_FILES['fprojet']['tmp_name']);
        if (isset($_POST['cond1']) and isset($_POST['cond2'])) {
            if ($taille_fichier / 1000000 <= 200) {
                if ($request->hasfile('fprojet')) {
                    $file = $request->file('fprojet');
                    $filename = time() . '.' . $file->getClientOriginalExtension();
                    $file->move('uploads/projets/', $filename);
                    $projet->fichier_projet = $filename;
                }
                $projet->save();

                $projets = Projet::all();

                return redirect()->route('validate_projet')->with(compact('projets'));
            }
            array_push($errors, 'La taille de ce fichier dépasse 200MO');
            return redirect()->route('create_projet')->with(compact('errors'));
        }

        array_push($errors, 'Veuillez accepter les conditions d\'utilisation');
        return redirect()->route('create_projet')->with(compact('errors'));
    }

    public function listeProjets()
    {

        $projets = Projet::all();

        return view('dashboard_client.liste_projet')->with(compact('projets'));
    }

    public function ProjetListe()
    {
        $heures = array();
        $jours = array();
        $secondes = array();
        $munites = array();
        $retour = array();
        $projets = Projet::all();

        foreach ($projets as $projet) {
            $dat = now();
            $date1 = date($dat);
            $date1 = strtotime($dat);
            $da = $projet->created_at;
            $date2 = date($da);
            $date2 = strtotime($da);
            $duree  = abs($date1 - $date2);
            $tmp = $duree;

            $retour['second'] = $tmp % 60;

            $tmp = floor(($tmp - $retour['second']) / 60);
            $retour['minute'] = $tmp % 60;

            $tmp = floor(($tmp - $retour['minute']) / 60);
            $retour['hour'] = $tmp % 24;

            $tmp = floor(($tmp - $retour['hour'])  / 24);
            $retour['day'] = $tmp;

            $heure = floor($retour['hour']);
            $jour = floor($retour['day']);
            $minute = floor($retour['minute']);
            $seconde = floor($retour['second']);

            $heures [] = $heure;
            $jours [] = $jour;
            $minutes [] = $minute;
            $secondes [] = $seconde;
        }
        // dd($heures, $jours, $minutes, $secondes);
        return view('projets')->with(compact('projets', 'heures', 'jours', 'minutes', 'secondes'));
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


    public function recherche(Request $request)
    {

        $projets = Projet::where('titre', 'like', '%' . $request->recherche . '%')->get();
        $duration = array();
        $retour = array();

        foreach ($projets as $projet) {
            $dat = now();
            $date1 = date($dat);
            $date1 = strtotime($dat);
            $da = $projet->created_at;
            $date2 = date($da);
            $date2 = strtotime($da);
            $duree  = abs($date1 - $date2);
            $tmp = $duree;

            $retour['second'] = $tmp % 60;

            $tmp = floor(($tmp - $retour['second']) / 60);
            $retour['minute'] = $tmp % 60;

            $tmp = floor(($tmp - $retour['minute']) / 60);
            $retour['hour'] = $tmp % 24;

            $tmp = floor(($tmp - $retour['hour'])  / 24);
            $retour['day'] = $tmp;

            $heure = floor($retour['hour']);
            $jour = floor($retour['day']);
            $minute = floor($retour['minute']);
            $seconde = floor($retour['second']);

            $heures [] = $heure;
            $jours [] = $jour;
            $minutes [] = $minute;
            $secondes [] = $seconde;
        }
        // dd($heures, $jours, $minutes, $secondes);
        return view('projets')->with(compact('projets', 'heures', 'jours', 'minutes', 'secondes'));
    }

    public function updateProjet(Request $request)
    {
        $data = $request->all();
        $projet_id = $data['id'];

        $projet = Projet::find($projet_id);

        if ($projet) {
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
        unlink("uploads/projets/" . $projet->fichier_projet);
        $projet->delete();
        return redirect()->route('liste_projet')
            ->with('success', 'projet has been deleted successfully');
    }
}
