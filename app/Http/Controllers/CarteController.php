<?php

namespace App\Http\Controllers;

use App\Models\Carte;
use Illuminate\Http\Request;
use App\Events\CarteLinkToUpdate;

class CarteController extends Controller
{
    public function requestToUpdate(Request $request)
    {
            $carte = Carte::where('numeroZ', $request['numeroZ'])->get()->first();
            if(!$carte)
            {
                return \response()->json(500);
            }
            CarteLinkToUpdate::dispatch($carte);
            return \response()->json([
                'result' => 'success',
                'data' => $carte,
            ],200);//redirect()->back()->with('success', 'Votre requête a été envoyé avec succès !');

        
    }
}
