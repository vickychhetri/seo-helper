<?php
// src/SEOHelperServiceProvider.php
namespace Vickychhetri\SEOHelper;

use Illuminate\Support\ServiceProvider;
use Vickychhetri\SEOHelper\Helpers\SeoAnalytics;

class GAnalyticsServiceProvider extends ServiceProvider
{
    public function boot()
    {

    }

    public function register()
    {

        $this->app->singleton('seo_analytics_facade', function () {
            return new SeoAnalytics();
        });

        $loader = \Illuminate\Foundation\AliasLoader::getInstance();
        $loader->alias('SeoAnalytics', SeoAnalytics::class);

    }

}
