<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Support\Facades\Mail;
use App\Mail\ConfirmationCarteToRedo;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Contracts\Queue\ShouldBeUnique;

class SendEmailAfterConfirmationToCarteRequestJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    private $carte;
    private $author;
    /**
     * Create a new job instance.
     */
    public function __construct($carte, $author)
    {
        $this->carte = $carte;
        $this->author = $author;
    }

    /**
     * Execute the job.
     */
    public function handle(): void
    {
        Mail::to($this->author->email)->send(new ConfirmationCarteToRedo($this->carte));

    }
}
