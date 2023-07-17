<?php

namespace App\Observers;

use App\Models\Carte;
use App\Models\Author;
use App\Mail\CarteCreated;
use Illuminate\Support\Facades\Mail;
use Filament\Notifications\Notification;
use App\Jobs\SendEmailAfterCreatedCarteJob;

class CarteObserver
{
    /**
     * Handle the Carte "created" event.
     */
    public function created(Carte $carte): void
    {
        $dateOfCarteCreated = gmdate('l d M Y à H:i:s', $carte->created);
        Notification::make()
            ->title('Nouvelle carte crée')
            ->success()
            ->body("Numero Z : $carte->numeroZ ($dateOfCarteCreated)")
            ->icon('heroicon-o-badge-check')
            ->sendToDatabase(\App\Models\User::all())
            ->send();
        SendEmailAfterCreatedCarteJob::dispatch($carte)->delay(30);
    }

    /**
     * Handle the Carte "updated" event.
     */
    public function updated(Carte $carte): void
    {
        //
    }

    /**
     * Handle the Carte "deleted" event.
     */
    public function deleted(Carte $carte): void
    {
        //
    }

    /**
     * Handle the Carte "restored" event.
     */
    public function restored(Carte $carte): void
    {
        //
    }

    /**
     * Handle the Carte "force deleted" event.
     */
    public function forceDeleted(Carte $carte): void
    {
        //
    }
}
