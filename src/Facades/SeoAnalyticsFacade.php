<?php

// src/Facades/SEOHelperFacade.php
namespace Vickychhetri\SEOHelper\Facades;

use Illuminate\Support\Facades\Facade;

class SeoAnalyticsFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'seo_analytics_facade';
    }
}
