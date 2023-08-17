<?php

namespace App\Http\Controllers;

use App\Models\Client;
use App\Models\User;
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
        $user = User::find($request->id);
        return view('dashboard_client.dashboard', ['user' => $user]);
    }

    public function editProfilClient(Request $request)
    {
        $data = $request->all();

        $client_id = $data['id'];

        $user = User::find($client_id);

        if ($user) {
            $user->pseudo = $data['pseudo'];
            $user->email = $data['email'];
            $user->password = $data['password'];

            $user->update();
            return view('dashboard_client.dashboard', ['user' => $user]);
        }

        return view('dashboard_client.dashboard', ['user' => $user]);
    }
}
