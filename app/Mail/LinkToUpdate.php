<?php

namespace App\Mail;

use App\Models\Carte;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Support\Facades\URL;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Queue\SerializesModels;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Contracts\Queue\ShouldQueue;

class LinkToUpdate extends Mailable
{
    use Queueable, SerializesModels;
    protected Carte $carte;
    /**
     * Create a new message instance.
     */
    public function __construct($carte)
    {
        $this->carte = $carte;
    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'Carte ZETCHA : Modification',
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        return new Content(
            markdown: 'emails.linkToUpdate',
            with : [
                'carte' => $this->carte,
                'lien' => URL::temporarySignedRoute('z-edit', now()->addMinutes(60), ['carte' => $this->carte])
            ]
        );
    }

    /**
     * Get the attachments for the message.
     *
     * @return array<int, \Illuminate\Mail\Mailables\Attachment>
     */
    public function attachments(): array
    {
        return [];
    }
}
