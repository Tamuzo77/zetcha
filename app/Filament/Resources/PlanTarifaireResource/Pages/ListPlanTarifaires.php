<?php

namespace App\Filament\Resources\PlanTarifaireResource\Pages;

use App\Filament\Resources\PlanTarifaireResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListPlanTarifaires extends ListRecords
{
    protected static string $resource = PlanTarifaireResource::class;

    protected function getActions(): array
    {
        return [
        ];
    }

    protected function getTableRecordsPerPageSelectOptions(): array
    {
        return [3];
    }
}
