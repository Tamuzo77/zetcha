<?php

namespace App\Listeners;

use App\Events\CarteLinkToUpdate;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Support\Facades\Notification;
use App\Notifications\CarteToUpdateNotification;

class SendCarteNotificationToUpdate
{
    /**
     * Create the event listener.
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     */
    public function handle(CarteLinkToUpdate $event): void
    {
        Notification::send(\App\Models\User::all(),new CarteToUpdateNotification($event->carte));
    }
}
