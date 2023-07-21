<?php

namespace App\Providers;

use App\Models\User;
use App\Models\Carte;
use Filament\Facades\Filament;
use App\Observers\CarteObserver;
use Illuminate\Support\Facades\Gate;
use Filament\Navigation\UserMenuItem;
use Illuminate\Support\ServiceProvider;
use App\Filament\Resources\QuestionResource;

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

            Filament::registerUserMenuItems([
                UserMenuItem::make()
                    ->label('Questions')
                    ->url(QuestionResource::getUrl('index'))
                    ->icon('heroicon-s-question-mark-circle')
            ]);
        });

        Carte::observe(CarteObserver::class);
        Gate::define('send_emails', fn(User $user) => true );
    }
}
