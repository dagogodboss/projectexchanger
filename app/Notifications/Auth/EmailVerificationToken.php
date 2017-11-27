<?php

namespace App\Notifications\Auth;

use App\User;
use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Notification;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;

class EmailVerificationToken extends Notification
{
    use Queueable;
    protected $user;
   public function __construct($user)
    {   
        $this->user = $user;
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
        $url =  url('/verify-email/'.urlencode($this->user->emailmagictoken->email_token).'/'.$this->user->emailmagictoken->user_id);

        return (new MailMessage)
                    ->subject('Validate Your Email')
                    ->greeting('Hello!')
                    ->line('Thank for registring with us. Please click the link to validate your account.')
                    ->action('Validate Email', $url)
                    ->line('If you did not register with us please discard this email.')
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
