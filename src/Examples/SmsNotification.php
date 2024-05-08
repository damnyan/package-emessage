<?php

namespace Dmn\Emessage\Examples;

use Illuminate\Notifications\Notification;
use Dmn\Emessage\Channels\Emessage;
use Dmn\Emessage\Messages\EmessageMessage;

class SmsNotification extends Notification
{
    /**
     * Get the notification channels.
     *
     * @param  mixed  $notifiable
     * @return array|string
     */
    public function via($notifiable)
    {
        return [Emessage::class];
    }

    /**
     * Get Emessage message
     *
     * @param mixed $notifiable
     *
     * @return EmessageMessage
     */
    public function toEmessage($notifiable): EmessageMessage
    {
        return (new EmessageMessage())
            ->setMobileNumber($notifiable['mobile_number'])
            ->setMessage('This is a sample sms from package channel emessage');
    }
}
