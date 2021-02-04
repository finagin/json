<?php

namespace Finagin\Json;

use Finagin\Json\Contracts\Json as JsonContract;
use Finagin\Json\Services\Json as JsonService;
use Illuminate\Support\ServiceProvider;

class JsonServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->app->singleton(JsonContract::class, JsonService::class);
    }
}
