<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class AprrovedTeam extends Notification
{
    use Queueable;
    public $whatsapp_link;

    /**
     * Create a new notification instance.
     */
    public function __construct(string $whatsapp_link)
    {
        $this->whatsapp_link = $whatsapp_link;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @return array<int, string>
     */
    public function via(object $notifiable): array
    {
        return ['mail'];
    }

    /**
     * Get the mail representation of the notification.
     */
    public function toMail(object $notifiable): MailMessage
    {
        return (new MailMessage)
            ->line('Tim anda telah disetujui.')
            ->line('Silahkan bergabung dengan grup whatsapp berikut untuk mendapatkan informasi lebih lanjut.')
            ->action('Join Whatsapp Group', $this->whatsapp_link)
            ->line('Terima kasih telah mendaftar di ' . config('app.name') . '.');
    }

    /**
     * Get the array representation of the notification.
     *
     * @return array<string, mixed>
     */
    public function toArray(object $notifiable): array
    {
        return [
            //
        ];
    }
}
