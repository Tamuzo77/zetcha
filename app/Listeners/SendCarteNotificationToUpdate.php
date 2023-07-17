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
use App\Jobs\SendAdminNotificationCarteLinkToUpdateJob;

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
        SendAdminNotificationCarteLinkToUpdateJob::dispatch($numeroZ, $email)->delay(1);
        
        //Notification::send(\App\Models\User::all(),new CarteToUpdateNotification($event->carte));
    }
}
