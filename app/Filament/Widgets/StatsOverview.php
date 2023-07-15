<?php

namespace App\Filament\Widgets;

use App\Models\Carte;
use App\Models\Author;
use Filament\Widgets\StatsOverviewWidget\Card;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;

class StatsOverview extends BaseWidget
{
    protected function getCards(): array
    {
        $data[] = Carte::where('created_at', '>', now()->subDays(7)->endOfDay())->count();
        $nbProduction = Carte::where('status_id', 1)->count();
        $nbEnAttente = Carte::where('status_id', 2)->count();
        $nbLivree = Carte::where('status_id', 3)->count();
        $cartes = Carte::with('planTarifaire')->get();
        $total = 0;
        foreach($cartes as $carte)
        {
            $total += $carte->planTarifaire->price;
        }
        return [
            Card::make('Auteurs', Author::count())
                ->description('Nombre de clients')
                ->chart([0,100,800,600,1200,700,400,200,300,500,150,80,6])
                ->color('secondary'),
            Card::make('Cartes', Carte::count())
                ->description("$nbProduction En production - $nbEnAttente En attente de livraison - $nbLivree Livrées")
                ->color('warning')
                ->chart([7, 2, 10, 3, 15, 4, 17])
                ->extraAttributes([
                    'class' => 'cursor-pointer',
                    'wire:click' => '$emitUp("setStatusFilter", "processed")',
                ]),
            Card::make('Revenue', "$total FCFA")
                ->color('success')
                ->chart([0,5,10,40,40,30,50,100]),
        ];
    }
}
