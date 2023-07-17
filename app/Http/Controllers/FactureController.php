<?php

namespace App\Http\Controllers;

use App\Models\Facture;
use Illuminate\Http\Request;

class FactureController extends Controller
{
    public function listeFactures() {

        $factures = Facture::all();

        return view('factures')->with(compact('factures'));
    }

    public function updateFacture(Request $request) {
        $data = $request->all();

        $facture_id = $data['id'];

        $facture = Facture::find($facture_id);

        if($facture){
            $facture->date_creation = $data['date_creation'];
            $facture->statut = $data['statut'];
            $facture->po = $data['po'];
            $facture->total = $data['total'];

            $facture->update();
            return redirect()->route('factures');
        }
        return redirect()->route('factures');
    }

    public function delete($id)
    {
        $facture = Facture::find($id);
        $facture->delete();
        return redirect()->route('factures')
            ->with('success','facture has been deleted successfully');
    }
}
