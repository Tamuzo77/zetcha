<?php

namespace App\Filament\Resources\CarteResource\Pages;

use App\Filament\Resources\CarteResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListCartes extends ListRecords
{
    protected static string $resource = CarteResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
            Actions\Action::make('grid')
                ->label('Grille')
                ->icon('heroicon-o-view-grid')
                ->color('success')
                ->url(CarteResource::getUrl('grid'))
        ];
    }

    protected function hasDeleteAction(): bool
    {
        return false;
    }
}
