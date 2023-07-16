<?php

namespace App\Http\Controllers;

use App\Models\Carte;
use Illuminate\Http\Request;
use App\Events\CarteLinkToUpdate;
use App\Http\Requests\EditCarteRequest;

class CarteController extends Controller
{
    public function requestToUpdate(EditCarteRequest $request)
    {
            $carte = Carte::where('numeroZ', $request['numeroZ'])->get()->first();
            CarteLinkToUpdate::dispatch($carte);
            return \response()->json([
                'result' => 'success',
                'data' => $carte,
            ],200);//redirect()->back()->with('success', 'Votre requête a été envoyé avec succès !');
    }
}
