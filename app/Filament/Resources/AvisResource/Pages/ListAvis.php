<?php

namespace App\Filament\Resources\AvisResource\Pages;

use App\Filament\Resources\AvisResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListAvis extends ListRecords
{
    protected static string $resource = AvisResource::class;

    protected function getActions(): array
    {
        return [
        ];
    }
}
