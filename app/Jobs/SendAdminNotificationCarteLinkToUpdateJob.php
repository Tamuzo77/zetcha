<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Queue\SerializesModels;
use Filament\Notifications\Notification;
use Illuminate\Queue\InteractsWithQueue;
use Filament\Notifications\Actions\Action;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Contracts\Queue\ShouldBeUnique;

class SendAdminNotificationCarteLinkToUpdateJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    public $numeroZ;
    public $email;
    /**
     * Create a new job instance.
     */
    public function __construct($numeroZ, $email)
    {
        $this->numeroZ = $numeroZ;
        $this->email = $email;
    }

    /**
     * Execute the job.
     */
    public function handle(): void
    {
        Notification::make()
            ->title("Modification d'une carte")
            ->body("La carte de numero $this->numeroZ est demandée pour modification")
            ->icon('heroicon-o-qrcode')
            ->iconColor('success')
            ->persistent()
            ->actions([
                Action::make('Envoyer le lien')
                    ->color('success')
                    ->button()
                    ->url(route('sendEmailToUpdate',$this->numeroZ ))
            ])
            ->sendToDatabase(\App\Models\User::all(), true)
            ->send();
    }
}
