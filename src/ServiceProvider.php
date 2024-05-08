<?php

namespace Dmn\Emessage;

use Dmn\Emessage\Client;
use Dmn\Emessage\Emessage;
use Illuminate\Support\ServiceProvider as BaseServiceProvider;

class ServiceProvider extends BaseServiceProvider
{
    /**
     * @inheritDoc
     */
    public function register()
    {
        $this->app->bind(Emessage::class, function ($app) {
            $config = $app['config']['emessage'];
            return new Client($config);
        });
    }
}
