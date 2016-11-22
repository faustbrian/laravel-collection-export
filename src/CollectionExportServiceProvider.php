<?php

namespace BrianFaust\CollectionExport;

use Illuminate\Support\ServiceProvider;
use Maatwebsite\Excel\ExcelServiceProvider;

class CollectionExportServiceProvider extends ServiceProvider
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
