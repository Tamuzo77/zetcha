<?php

namespace App\Filament\Pages;

use Filament\Pages\Page;
use App\Filament\Widgets\AvisOverview;

class Avis extends Page
{
    protected static ?string $navigationIcon = 'heroicon-o-document-text';

    protected static ?string $navigationGroup = 'Autres';

    protected static ?string $title = 'Carte ZETCHA : Les Avis';

    protected static ?string $slug = 'avis';

    protected static string $view = 'filament.pages.avis';

    protected function getHeaderWidgets() : array
    {
        return [
        ];
    }

    protected function getColumns() : int | array
    {
        return 3;
    }
}
