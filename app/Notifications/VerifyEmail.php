<?php

namespace App\Notifications;
use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Notification;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\Lang;
use Illuminate\Auth\Notifications\VerifyEmail as VerifyEmailBase;

class VerifyEmail extends VerifyEmailBase
{

    public function __construct()
    {
        //
    }

    public function via($notifiable)
    {
        return ['mail'];
    }


    // isi email
    public function toMail($notifiable)
    {
        if (static::$toMailCallback) {
            return call_user_func(static::$toMailCallback, $notifiable);
        }
        return (new MailMessage)
            ->subject(Lang::get('Verify Email Address'))
            ->line(Lang::get('Satu langkah lagi untuk menyelesaikan pendaftaran Anda. Silakan klik tombol di bawah ini untuk memverifikasi akun Anda'))
            ->line(Lang::get('Link verifikasi ini tidak berlaku setelah 60 minutes'))
            ->action(
                Lang::get('Verifikasi Email'),
                $this->verificationUrl($notifiable)
            );
            
    }
}