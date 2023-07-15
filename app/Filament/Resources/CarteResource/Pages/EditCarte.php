<?php

namespace App\Filament\Resources\CarteResource\Pages;

use App\Filament\Resources\CarteResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditCarte extends EditRecord
{
    protected static string $resource = CarteResource::class;

    protected function getActions(): array
    {
        return [
        ];
    }

    protected function mutateFormDataBeforeSave(array $data) : array
    {
        ($data['status_id'] == 3) ? $data['delivered_at'] = now() : $data['delivered_at'] = null;
        return $data;

    }
}
