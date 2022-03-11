<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class VideoCurtido extends Notification
{
    use Queueable;

    public function __construct($curtida)
    {
        $this->curtida = $curtida;
    }

    public function via($notifiable)
    {
        return ['database'];
    }

    public function toArray($notifiable)
    {
        return [
            'user_id' => $this->curtida->user_id,
            'video_id' => $this->curtida->video_id,
        ];
    }
}
