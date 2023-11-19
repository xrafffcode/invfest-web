<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class OtpTeam extends Notification
{
    use Queueable;
    public $otp;

    /**
     * Create a new notification instance.
     */
    public function __construct(int $otp)
    {
        $this->otp = $otp;
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
            ->subject('OTP Verifikasi Pendaftaran Tim')
            ->line('Berikut adalah kode OTP untuk verifikasi pendaftaran tim.')
            ->line('Kode OTP: ' . $this->otp)
            ->line('This OTP will expire in 5 minutes.')
            ->line('If you did not request an OTP, no further action is required.');
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
