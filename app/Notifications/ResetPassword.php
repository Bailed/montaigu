<?php

namespace App\Notifications;

use Illuminate\Notifications\Notification;
use Illuminate\Notifications\Messages\MailMessage;

class ResetPassword extends Notification
{
    public $token;

    public function __construct($token)
    {
        $this->token = $token;
    }

    public function via($notifiable)
    {
        return ['mail'];
    }

    public function toMail($notifiable)
    {
        return (new MailMessage)
            ->subject('Ré-initialisation de votre mot de passe')
            ->line('Vous recevez ce mail suite à votre demande de configuration de votre nouveau mot de passe.')
            ->action('Configurer un nouveau mot de passe', url('password/reset', $this->token))
            ->line("Si vous n'avez pas demandé un nouveau mot de passe, ne tenez pas compte de ce mail.");
    }
}
