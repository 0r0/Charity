<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Notification;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;

class VolunteerRequirementDeclarationNotification extends Notification
{
    use Queueable;
    public $data, $lastName, $firstName, $userName,$requirementSkill;

    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct($data, $firstName, $lastName, $userName,$requirementSkill)
    {
        $this->data = $data;
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->userName = $userName;
        $this->requirementSkill=$requirementSkill;

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
            ->line($this->data)
            ->action('رفتن به صفحه', url('/charity-dashboard'))
            ->subject('درخواست آمادگی برای نیازمندی مربوط به پزوژه')
            ->greeting('با سلام')
            ->line('متشکرم');
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
            'firstName' => $this->firstName,
            'lastName' => $this->lastName,
            'userName' => $this->userName,
            'requirementSkill' => $this->requirementSkill
        ];
    }
}
