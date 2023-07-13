<?php

namespace App\Filament\Resources\FonctionnaliteResource\Pages;

use App\Filament\Resources\FonctionnaliteResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditFonctionnalite extends EditRecord
{
    protected static string $resource = FonctionnaliteResource::class;

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
