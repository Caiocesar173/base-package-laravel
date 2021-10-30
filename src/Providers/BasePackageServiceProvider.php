<?php

namespace Caiocesar173\BasePackage\Providers;

use Illuminate\Support\ServiceProvider;

class BasePackageServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->loadViewsFrom(__DIR__.'/../../resources/views', 'utils');
        $this->loadMigrationsFrom(__DIR__ .'/../../database/migrations');
    }
}