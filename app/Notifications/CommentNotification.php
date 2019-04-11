<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Notification;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;

class CommentNotification extends Notification
{
    use Queueable;
    public $userName;
    public $uuid;

    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct($userName,$uuid)
    {
        $this->userName = $userName;
        $this->uuid = $uuid;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @param  mixed $notifiable
     * @return array
     */
    public function via($notifiable)
    {
        return ['mail', 'database'];
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
            ->line(' کاربر' . $this->userName . ' دیدگاه خود را گذاشت')
            ->action('مشاهده دیدگاه', url('/project-more-info/' . $this->uuid))
            ->line('Thank you for using our application!');
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
            'data' => ' کاربر' . $this->userName . ' دیدگاه خود را گذاشت',
//            'data' => ' کاربر دیدگاه خود را گذاشت',
            'id' => $this->uuid,
//            'text'=>'دیدگاه'
        ];
    }
}
