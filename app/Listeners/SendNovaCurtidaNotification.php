<?php

namespace App\Listeners;

use App\Notifications\VideoCurtido;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class SendNovaCurtidaNotification
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  object  $event
     * @return void
     */
    public function handle($event)
    {
        $admins = User::whereHas('roles', function ($query) {
            $query->where('id', 1);
        })->get();

        Notification::send($admins, new VideoCurtido($event->user));
    }
}
