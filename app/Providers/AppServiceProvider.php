<?php

namespace App\Providers;

use App\Models\Carte;
use Filament\Facades\Filament;
use App\Observers\CarteObserver;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        Filament::serving(function(){
            Filament::registerNavigationGroups([
                'Cartes de Visites ZETCHA',
                'Autres'
            ]);
        });

        Carte::observe(CarteObserver::class);
    }
}
