<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;
use Illuminate\Support\Facades\Auth;
use App\images;

class TaskComplete2 extends Notification
{
    use Queueable;
    private $images;

    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct(images $images)
    {
        $this->images = $images;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function via($notifiable)
    {
        return ['database'];
    }

    /**
     * Get the mail representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return \Illuminate\Notifications\Messages\MailMessage
     */


    /**
     * Get the array representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function toDatabase($notifiable)
    {
        return [

            // 'data' => $this->details['body']
            'id' => $this->images->id,
            'title' => 'تم اضافة  لعبه جديد بواسطة :',
            'user' => Auth::user()->name,

        ];
    }
}
