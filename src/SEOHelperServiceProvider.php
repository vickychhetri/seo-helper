<?php
// src/SEOHelperServiceProvider.php
namespace Vendor\SEOHelper;

use Illuminate\Support\ServiceProvider;

class SEOHelperServiceProvider extends ServiceProvider
{
    public function boot()
    {
        // Publish config file
        $this->publishes([
            __DIR__ . '/../config/seo_helper.php' => config_path('seo_helper.php'),
        ]);

        // Load views
        $this->loadViewsFrom(__DIR__ . '/../resources/views', 'seo_helper');
    }

    public function register()
    {
        // Merge config file
        $this->mergeConfigFrom(
            __DIR__ . '/../config/seo_helper.php', 'seo_helper'
        );

        $this->app->singleton('seo_helper', function () {
            return new SEOHelper();
        });

        $loader = \Illuminate\Foundation\AliasLoader::getInstance();
        $loader->alias('SEOHelper', SEOHelperFacade::class);

    }
}
