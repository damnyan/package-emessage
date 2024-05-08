# pano?

## install
`composer require dmn/pkg-emessage`

## configuration
`emessage.php`

```php
<?php

return [
    'base_uri' => env('EMESSAGE_BASE_URI', 'https://ws-live.emessage.com/'),
    'api_key' => env('EMESSAGE_API_KEY'),
    'guzzle' => [],
];
```

## service provider
`Dmn\Emessage\ServiceProvider::class`

## example
```php
<?php

namespace Dmn\Emessage\Examples;

use Dmn\Emessage\Channels\Emessage;
use Dmn\Emessage\Messages\EmessageMessage;
use Illuminate\Notifications\Notification;

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
```

## NOTE:
#### pwede gamitin rekta yung `Dmn\Emessage\Emessage`, inject lang.
