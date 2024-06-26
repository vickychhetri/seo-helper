<?php

// src/Facades/SEOHelperFacade.php
namespace Vickychhetri\SEOHelper\Facades;

use Illuminate\Support\Facades\Facade;

class GAnalyticsFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'g_analytics_facade';
    }
}
