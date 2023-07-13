<?php

namespace App\Filament\Resources\FonctionnaliteResource\Pages;

use App\Filament\Resources\FonctionnaliteResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListFonctionnalites extends ListRecords
{
    protected static string $resource = FonctionnaliteResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
