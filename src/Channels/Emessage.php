<?php

namespace Dmn\Emessage\Channels;

use Illuminate\Notifications\Notification;
use Dmn\Emessage\Emessage as EmessageEmessage;

class Emessage
{
    protected $client;

    /**
     * Construct
     *
     * @param EmessageEmessage $client
     */
    public function __construct(EmessageEmessage $client)
    {
        $this->client = $client;
    }

    /**
     * Send the given notification.
     *
     * @param  mixed  $notifiable
     * @param  \Illuminate\Notifications\Notification $notification
     */
    public function send($notifiable, Notification $notification)
    {
        $smsMessage = $notification->toEmessage($notifiable);

        $this->client->send(
            $smsMessage->getMobileNumber(),
            $smsMessage->getMessage()
        );
    }
}
