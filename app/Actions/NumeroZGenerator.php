<?php

namespace App\Actions;

use App\Models\Carte;

class NumeroZGenerator
{
    protected $numeroZ;
    public function handle()
    {
        $this->numeroZ = mt_rand(1000000, 9999999);
        while(Carte::where('numeroZ', $this->numeroZ)->exists())
        {
            $this->numeroZ = mt_rand(1000000, 9999999);
        }
        return $this->numeroZ;
    }
}