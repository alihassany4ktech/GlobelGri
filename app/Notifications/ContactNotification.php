<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class ContactNotification extends Notification
{
    use Queueable;
    public $message;
    public $type;
    public $date;
    public $time;
    public $email;
    public $phone;



    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct($message, $date, $time, $email, $phone, $type)
    {
        $this->message = $message;
        $this->date = $date;
        $this->time = $time;
        $this->email = $email;
        $this->phone = $phone;
        $this->type = $type;
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
            ->line($this->message . ' Date ' . $this->date . ' Time ' . $this->time . ' With ' . $this->email . ',' . $this->phone . ' and Type ' . $this->type)
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
