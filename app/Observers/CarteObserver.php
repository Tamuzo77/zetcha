<?php

namespace App\Observers;

use App\Models\Carte;
use App\Models\Author;
use App\Mail\CarteCreated;
use Illuminate\Support\Facades\Mail;

class CarteObserver
{
    /**
     * Handle the Carte "created" event.
     */
    public function created(Carte $carte): void
    {
        $author = Author::where('id', $carte->author_id)->get()->first();
        Mail::to($author->email)->send(new CarteCreated($carte));
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
