<?php

namespace App\Actions;

class CodeQRGenerator {

    public function handle($numZ)
    {
        return env('APP_URL'). "/zetcha-cards". "/ZTA".$numZ;
    }
}