<?php

namespace App\Http\Controllers;

use App\Models\Carte;
use App\Models\Author;
use App\Models\Fonction;
use App\Events\CarteLost;
use Illuminate\Http\Request;
use App\Models\PlanTarifaire;
use App\Actions\CodeQRGenerator;
use App\Actions\NumeroZGenerator;
use App\Events\CarteLinkToUpdate;
use App\Models\InfosProfessionelle;
use Illuminate\Support\Facades\Mail;
use App\Mail\ConfirmationCarteToRedo;
use App\Http\Requests\EditCarteRequest;
use App\Http\Requests\LostCarteRequest;
use App\Http\Requests\StoreCarteRequest;
use App\Jobs\SendEmailToUserToUpdateJob;
use App\Jobs\SendEmailAfterConfirmationToCarteRequestJob;

class CarteController extends Controller
{
    public function create()
    {
        $planTarifaireId = request()->planTarifaire_id;
        return view('cartes.creation', compact('planTarifaireId')) ;
    }

    public function store(StoreCarteRequest $request)
    {

        $authorDatas = [
            'name' => $request->author_name,
            'email' => $request->author_email,
            'author_phone_number' => $request->author_phone_number,
        ];
        $carteDatas = [
            'numeroZ' => (new NumeroZGenerator())->handle(),
            'plan_tarifaire_id' => $request->plan_tarifaire_id,
            'status_id' => 1,
            'last_name' => $request->last_name,
            'first_name' => $request->first_name,
            'picture' => $request->picture,
        ];

        \DB::transaction(function () use ($authorDatas, $carteDatas, $request) {
            $author = Author::updateOrCreate([
                'email' => $authorDatas['email'],
            ], [
                'name' => $authorDatas['name'],
                'phone_number' => $authorDatas['author_phone_number']
            ]);

            $carte = Carte::create($carteDatas + [
                'codeQR' => (new CodeQRGenerator())->handle($carteDatas['numeroZ']),
                'author_id' => $author->id,
            ]);

            $infosProfessionelle = InfosProfessionelle::create($request->validated() + [
                'carte_id' => $carte->id,
            ]);

            foreach($request->fonctions as $fonction)
            {
                Fonction::create($fonction + [
                    'infos_professionelle_id' => $infosProfessionelle->id,
                ]);
            }

        });


        return redirect()->route('paiements.handle', request()->plan_tarifaire_id) ;
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

    public function sendEmailToUpdate(Carte $carte)
    {
        SendEmailToUserToUpdateJob::dispatch($carte);
        return \redirect()->back()->with('success', 'Lien Envoyé avec succes !');

    }

    public function edit(Carte $carte)
    {
        if(!\request()->hasValidSignature())
        {
            \abort(403, 'Lien expiré ou non valide');
        }
        dd($carte);
    }
}
