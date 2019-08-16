<?php

namespace Qooiz\BillingSDK;

use GuzzleHttp\Client;
use Illuminate\Support\ServiceProvider;

class BillingServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->app->singleton(BillingGuzzle::class, function ($app) {
            $transport = new Client($app['config']['services.billing']);

            return new BillingGuzzle($transport);
        });

        $this->app->bind(BillingInterface::class, BillingGuzzle::class);
    }
}
