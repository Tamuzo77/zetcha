<?php

namespace App\Jobs;

use App\Models\Carte;
use App\Mail\LinkToUpdate;
use Illuminate\Bus\Queueable;
use Illuminate\Support\Facades\Mail;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Contracts\Queue\ShouldBeUnique;

class SendEmailToUserToUpdateJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    public Carte $carte;
    public function __construct($carte)
    {
        $this->carte = $carte;
    }

    /**
     * Execute the job.
     */
    public function handle(): void
    {
        Mail::to($this->carte->author->email)->send(new LinkToUpdate($this->carte));
    }
}
