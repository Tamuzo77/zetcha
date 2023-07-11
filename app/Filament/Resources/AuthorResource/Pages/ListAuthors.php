<?php

namespace App\Filament\Resources\AuthorResource\Pages;

use App\Filament\Resources\AuthorResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListAuthors extends ListRecords
{
    protected static string $resource = AuthorResource::class;

    protected static ?string $title = 'Liste des Créateurs de Cartes ZETCHA';


    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
