<?php

namespace App\Notifications;

use App\User;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;
use App\Notifications\IpLoinglast;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\request;


class IpLoinglast extends Notification
{
    use Queueable;
    
    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public $user;

    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct(User $user)
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
    
    /*
    
    return (new MailMessage)
        ->greeting('Hello')
        ->line('The introduction to the notification.')
        ->action('Notification Action', 'https://laravel.com')
        ->line('Thank you for using our application!');
    
    */

    /**
     * Get the mail representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return \Illuminate\Notifications\Messages\MailMessage
     */
    public function toMail($notifiable)
    {
        
       return (new MailMessage)
        ->greeting('Hello ' . $this->user->name)
        ->line('Your account has been logged in from an IP address: ' . $this->user->ip_signup);
    }

    /**
     * Get the array representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return array
     */
}
