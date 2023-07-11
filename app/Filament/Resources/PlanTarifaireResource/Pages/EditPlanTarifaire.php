<?php

namespace App\Filament\Resources\PlanTarifaireResource\Pages;

use App\Filament\Resources\PlanTarifaireResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditPlanTarifaire extends EditRecord
{
    protected static string $resource = PlanTarifaireResource::class;

    protected function getActions(): array
    {
        return [
        ];
    }
}
