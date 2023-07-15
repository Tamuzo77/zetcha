<?php

namespace App\Filament\Resources\CarteResource\Pages;

use App\Filament\Resources\CarteResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateCarte extends CreateRecord
{
    protected static string $resource = CarteResource::class;

    protected function mutateFormDataBeforeCreate(array $data) : array
    {
        $data['codeQR'] = env('APP_URL'). "/zetcha-cards". "/ZTA".$data['numeroZ'];
        ($data['status_id'] == 3) ? $data['delivered_at'] = now() : $data['delivered_at'] = null;
        return $data;
    }
}
