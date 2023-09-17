<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PlanTarifaire;

class PaiementController extends Controller
{
    public function handle($planTarifaireId)
    {
       $planTarifaire = PlanTarifaire::find($planTarifaireId);
       return view('paiements.handle', compact('planTarifaire'));
    }

    public function validatePaiement($id)
    {
        return redirect()->route('home');
    }
}
