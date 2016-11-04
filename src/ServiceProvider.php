<?php

namespace BrianFaust\CollectionExport;

use BrianFaust\ServiceProvider\ServiceProvider as BaseProvider;
use Maatwebsite\Excel\ExcelServiceProvider;

class ServiceProvider extends BaseProvider
{
    /**
     * Register the application services.
     */
    public function register()
    {
        $this->app->register(ExcelServiceProvider::class);
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return [ExcelServiceProvider::class];
    }
}
