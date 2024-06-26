<?php
// src/SEOHelperServiceProvider.php
namespace Vickychhetri\SEOHelper;

use Illuminate\Support\ServiceProvider;
use Vickychhetri\SEOHelper\Helpers\GAnalytics;

class GAnalyticsServiceProvider extends ServiceProvider
{
    public function boot()
    {

    }

    public function register()
    {

        $this->app->singleton('g_analytics_facade', function () {
            return new GAnalytics();
        });

        $loader = \Illuminate\Foundation\AliasLoader::getInstance();
        $loader->alias('GAnalytics', GAnalytics::class);

    }

}
