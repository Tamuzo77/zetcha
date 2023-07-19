<?php

namespace App\Http\Controllers;

use App\Models\Carte;
use App\Models\Author;
use App\Events\CarteLost;
use Illuminate\Http\Request;
use App\Events\CarteLinkToUpdate;
use Illuminate\Support\Facades\Mail;
use App\Mail\ConfirmationCarteToRedo;
use App\Http\Requests\EditCarteRequest;
use App\Http\Requests\LostCarteRequest;
use App\Http\Requests\StoreCarteRequest;
use App\Jobs\SendEmailAfterConfirmationToCarteRequestJob;

class CarteController extends Controller
{
    public function create(StoreCarteRequest $request)
    {
        return \response()->json(200) ;
    }

    public function view(Carte $carte)
    {
        dd($carte);
        return view();
    }
    public function requestToUpdate(EditCarteRequest $request)
    {
            $carte = Carte::where('numeroZ', $request['numeroZ'])->get()->first();
            CarteLinkToUpdate::dispatch($carte);
            return \response()->json([
                'result' => 'success',
                'data' => $carte,
            ],200);//redirect()->back()->with('success', 'Votre requête a été envoyé avec succès !');
    }

    public function carteLost(LostCarteRequest $request)
    {
        $carte = Carte::where('numeroZ', $request['numeroZ'])->get()->first();
        CarteLost::dispatch($carte);
        return \response()->json(200);

    }

    public function confirmationToRedoCarte(Carte $carte)
    {
        $author = Author::where('id', $carte->author_id)->get()->first();
        SendEmailAfterConfirmationToCarteRequestJob::dispatch($carte, $author);
    }
}
