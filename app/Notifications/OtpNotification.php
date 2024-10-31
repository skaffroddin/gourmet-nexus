<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Notification;
use Illuminate\Notifications\Messages\NexmoMessage; // Use Nexmo or any other SMS service

class OtpNotification extends Notification
{
    use Queueable;

    protected $otp;

    public function __construct($otp)
    {
        $this->otp = $otp;
    }

    public function via($notifiable)
    {
        return ['nexmo']; // Use the SMS channel
    }

    public function toNexmo($notifiable)
    {
        return (new NexmoMessage())
            ->content('Your OTP for registration is: ' . $this->otp);
    }
}
