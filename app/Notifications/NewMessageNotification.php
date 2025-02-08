<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Notification;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;

class NewMessageNotification extends Notification
{
    use Queueable;
    
    protected $message;
    
    public function __construct($message)
    {
        $this->message = $message;
    }

    // Notification কোথায় store হবে
    public function via($notifiable)
    {
        return ['database'];
    }

    // Notification data কেমন হবে
    public function toDatabase($notifiable)
    {
        return [
            'message' => $this->message,
            'url' => url('/notifications')
        ];
    }
}
