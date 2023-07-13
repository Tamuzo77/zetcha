<?php

namespace App\Filament\Resources\CarteResource\Pages;

use App\Filament\Resources\CarteResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ViewRecord;

class ViewCarte extends ViewRecord
{
    protected static string $resource = CarteResource::class;

    protected static string $view = 'filament.resources.carteResource.pages.view';

    protected function getActions(): array
    {
        return [];
    }

    public function getForms(): array
    {
        return [
            'form' => $this->makeForm()
                ->context('view')
                ->disabled()
                ->model($this->getRecord())
                ->schema($this->getFormSchema())
                ->statePath('data')
                ->inlineLabel(config('filament.layout.forms.have_inline_labels')),
        ];
    }

    
}
