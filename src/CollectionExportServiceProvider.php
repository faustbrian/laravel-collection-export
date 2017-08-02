<?php


declare(strict_types=1);

/*
 * This file is part of Collection Export.
 *
 * (c) Brian Faust <hello@brianfaust.me>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

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
        $this->registerProviders();
    }

    /**
     * Register the third-party service providers.
     */
    private function registerProviders()
    {
        $this->app->register(ExcelServiceProvider::class);
    }
}
