<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class ContactInfoNotification extends Notification
{
    use Queueable;
    public $msg;
    public $email;
    public $phone;
    public $type;
    public $message;

    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct($msg, $email, $phone, $type, $message)
    {
        $this->msg = $msg;
        $this->email = $email;
        $this->phone = $phone;
        $this->type = $type;
        $this->message = $message;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function via($notifiable)
    {
        return ['mail'];
    }

    /**
     * Get the mail representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return \Illuminate\Notifications\Messages\MailMessage
     */
    public function toMail($notifiable)
    {
        return (new MailMessage)
            ->line($this->msg)
            ->line(' Email ' . $this->email . ' Phone ' . $this->phone . ' Type ' . $this->type)
            ->line($this->message)
            ->line('Thank you for using our application!');
    }

    /**
     * Get the array representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function toArray($notifiable)
    {
        return [
            //
        ];
    }
}
