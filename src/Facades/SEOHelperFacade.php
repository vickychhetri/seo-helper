<?php

// src/Facades/SEOHelperFacade.php
namespace Vickychhetri\SEOHelper\Facades;

use Illuminate\Support\Facades\Facade;

class SEOHelperFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'seo_helper';
    }
}
