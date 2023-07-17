<?php

namespace App\Jobs;

use App\Models\Carte;
use App\Models\Author;
use App\Mail\CarteCreated;
use Illuminate\Bus\Queueable;
use Illuminate\Support\Facades\Mail;
use Illuminate\Queue\SerializesModels;
use Filament\Notifications\Notification;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Contracts\Queue\ShouldBeUnique;

class SendEmailAfterCreatedCarteJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    private Carte $carte;
    /**
     * Create a new job instance.
     */
    public function __construct($carte)
    {
        $this->carte = $carte;
    }

    /**
     * Execute the job.
     */
    public function handle(): void
    {
        $author = Author::where('id', $this->carte->author_id)->get()->first();
        Mail::to($author->email)->send(new CarteCreated($this->carte));
    }
}
