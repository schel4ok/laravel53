<?php

namespace App\Notifications;

use Illuminate\Http\Request;
use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Notification;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;

class CallbackNotification extends Notification
{
    use Queueable;
    protected $request;

    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct(Request $request)
    {
        $this->request = $request->all();
        //dd($this->request);
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
                    ->subject('Обратный звонок с сайта Стекло Групп')
                    ->from($this->request['email'])
                    ->replyto($this->request['email'])
                    ->line('Имя: '. $this->request['name'])
                    ->line('Телефон: '. $this->request['tel'])
                    ->line('Желательное время звонка: '. $this->request['time'])
                    ->line('mail: '. $this->request['email'])
                    ->line('Ваше сообщение отправлено. В ближайшее время мы с вами свяжемся.');
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
