<?php

namespace App\Listeners;

use App\Models\Carte;
use App\Models\Author;
use App\Events\CarteLost;
use Filament\Notifications\Notification;
use Illuminate\Queue\InteractsWithQueue;
use Filament\Notifications\Actions\Action;
use Illuminate\Contracts\Queue\ShouldQueue;
use App\Jobs\SendEmailAfterConfirmationToCarteRequestJob;

class SendAdminNotificationLostCarteListener
{
    /**
     * Create the event listener.
     */
    protected Carte $carte;
    protected Author $author;
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     */
    public function handle(CarteLost $event): void
    {
        $this->carte = $event->carte;
        $numeroZ = $this->carte->numeroZ;
        $this->author = Author::where('id', $event->carte->author_id)->get()->first();
        $email = $this->author->email;

        Notification::make()
            ->title('Réimpression de Carte')
            ->warning()
            ->icon('heroicon-o-identification')
            ->body("Carte de numero : $numeroZ est demandé pour une réimpression")
            ->sendToDatabase(\App\Models\User::all(), true)
            ->send();
        SendEmailAfterConfirmationToCarteRequestJob::dispatch($this->carte, $this->author)->delay(10);
    }
}
