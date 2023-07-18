<?php

namespace App\Http\Controllers;

use App\Models\Client;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    public function listeClients()
    {

        $clients = Client::all();

        return view('liste_utilisateur')->with(compact('clients'));
    }

    public function editProfil(Request $request)
    {
        $client = Client::find($request->id);
        return view('dashboard_client.dashboard')->with(compact('client'));
    }

    public function editProfilClient(Request $request)
    {
        $data = $request->all();
        $client_id = $data['id'];

        $client = Client::find($client_id);

        if ($client) {
            $client->nom = $data['nom'];
            $client->email = $data['email'];
            $client->password = $data['password'];

            $client->update();
            return view('dashboard_client.dashboard')->with(compact('client'));
        }
        return view('dashboard_client.dashboard')->with(compact('client'));
    }
}
