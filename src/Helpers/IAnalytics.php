<?php

namespace Vickychhetri\SEOHelper\Helpers;

interface IAnalytics
{
    public function activeUserSessionCountyWise($start_date,$endDate);
    public function activeUserSessionCityWise($start_date,$endDate);
    public function activeUserSessionBrowserWise($start_date,$endDate);
    public function activeUserSessionDeviceWise($start_date,$endDate);
    public function screenPageViews($start_date,$endDate);
    public function topEvents($start_date,$endDate);
    public function userTrending($start_date,$endDate);
    public function newUserCountry($start_date,$endDate);

    public function sessionsCampaign($start_date,$endDate);

    public function userSessionRevenueCountry($start_date,$endDate);


}
