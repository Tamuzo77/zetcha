<?php

namespace App\Listeners;

use App\Models\Carte;
use App\Models\Author;
use App\Events\CarteLinkToUpdate;
use Filament\Notifications\Notification;
use Illuminate\Queue\InteractsWithQueue;
use Filament\Notifications\Actions\Action;
use Illuminate\Contracts\Queue\ShouldQueue;
use App\Notifications\CarteToUpdateNotification;

class SendCarteNotificationToUpdate
{
    public Carte $carte;
    public Author $author;

    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     */
    public function handle(CarteLinkToUpdate $event): void
    {
        $this->carte = $event->carte;
        $numeroZ = $this->carte->numeroZ;
        $this->author = Author::where('id', $event->carte->author_id)->get()->first();
        $email = $this->author->email;
        Notification::make()
            ->title("Modification d'une carte")
            ->body("La carte de numero $numeroZ est demandée pour modification")
            ->icon('heroicon-o-qrcode')
            ->iconColor('success')
            ->actions([
                Action::make('Envoyer le lien')
                    ->color('success')
            ])
            ->sendToDatabase(\App\Models\User::all(), true)
            ->send()
            ->persistent();
        //Notification::send(\App\Models\User::all(),new CarteToUpdateNotification($event->carte));
    }
}
