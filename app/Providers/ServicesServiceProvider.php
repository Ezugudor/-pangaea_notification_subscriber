<?php

namespace App\Providers;

use App\Contracts\Services\IMessageService;
use App\Services\MessageService;
use Illuminate\Support\ServiceProvider;

class ServicesServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //Services

        $this->app->bind(IMessageService::class, MessageService::class);
    }
}
