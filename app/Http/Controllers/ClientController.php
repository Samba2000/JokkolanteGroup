<?php

namespace App\Http\Controllers;

use App\Models\Client;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    public function listeClients() {

        $clients = Client::all();

        return view('liste_utilisateur')->with(compact('clients'));
    }
}
