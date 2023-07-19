<?php

namespace App\Services;

use App\Models\Carte;
use App\Models\Author;
use App\Models\InfosProfessionelle;

class CarteService {
    protected Carte $carte;
    protected InfosProfessionelle $infos;
    protected Author $author;

    public function create($carteDatas, $infosProsDatas)
    {

        try {
            
            \DB::transaction(function () use ($carteDatas) {
                $this->carte = Carte::create($carteDatas);
                foreach ($infosProsDatas as $infos) {
                    InfosProfessionelle::create($infos + ['carte_id' =>$this->carte->id]);
                }
            });

            return \redirect()->back()->with('success');
        } catch (\Throwable $th) {
        }
    }
}