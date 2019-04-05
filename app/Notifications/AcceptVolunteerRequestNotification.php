<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Notification;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;

class AcceptVolunteerRequestNotification extends Notification
{
    use Queueable;

    public $data,$projectTitle;
//        $lastName, $firstName, $userName;


    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct($data,$projectTitle)
    {
        $this->data = $data;
        $this->projectTitle = $projectTitle;
//        $this->lastName = $lastName;
//        $this->userName = $userName;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @param  mixed $notifiable
     * @return array
     */
    public function via($notifiable)
    {
        return ['database'];
    }

    /**
     * Get the mail representation of the notification.
     *
     * @param  mixed $notifiable
     * @return \Illuminate\Notifications\Messages\MailMessage
     */
    public function toMail($notifiable)
    {
        return (new MailMessage)
            ->line($this->data)
            ->action('رفتن به صفحه', url('/volunteer-dashboard'))
            ->line('متشکرم')
            ->subject(' درخواست داوطلبی ')
            ->greeting('با سلام');
    }

    /**
     * Get the array representation of the notification.
     *
     * @param  mixed $notifiable
     * @return array
     */
    public function toArray($notifiable)
    {
        return [
            'data' => $this->data,
            'title' => $this->projectTitle,
//            'lastName' => $this->lastName,
//            'userName' => $this->userName
        ];
    }
}
