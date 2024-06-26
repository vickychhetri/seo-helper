<?php

namespace Vickychhetri\SEOHelper\Helpers;
class GAnalytics implements IAnalytics
{
    private GoogleAnalyticsGA4 $ga;
    private mixed $propertyId;

    public function __construct()
    {
        $this->propertyId = config('seo_helper.property');
        $this->ga = new GoogleAnalyticsGA4(config('seo_helper.key-path'));
    }

    /**
     * Active Users and Session with Countries
     * @param $start_date
     * @param $endDate
     * @return array
     */
    public function activeUserSessionCountyWise($start_date, $endDate): array
    {
        $metrics = ['activeUsers', 'sessions'];
        $dimensions = ['country'];
        return $this->ga->getReport($this->propertyId, $start_date, $endDate, $metrics, $dimensions);
    }

    /**
     * @param $start_date
     * @param $endDate
     * @return array
     */
    public function activeUserSessionCityWise($start_date, $endDate): array
    {
        $metrics = ['activeUsers','sessions'];
        $dimensions = ['city'];
        return $this->ga->getReport($this->propertyId, $start_date, $endDate, $metrics, $dimensions);
    }

    /**
     * @param $start_date
     * @param $endDate
     * @return array
     */
    public function activeUserSessionBrowserWise($start_date, $endDate): array
    {
        $metrics = ['activeUsers','sessions'];
        $dimensions = ['browser'];
        return $this->ga->getReport($this->propertyId, $start_date, $endDate, $metrics, $dimensions);
    }

    /**
     * @param $start_date
     * @param $endDate
     * @return array
     */
    public function activeUserSessionDeviceWise($start_date, $endDate): array
    {
        $metrics = ['activeUsers','sessions'];
        $dimensions = ['deviceCategory'];
        return $this->ga->getReport($this->propertyId, $start_date, $endDate, $metrics, $dimensions);
    }

    /**
     * @param $start_date
     * @param $endDate
     * @return array
     */
    public function screenPageViews($start_date, $endDate): array
    {
        $metrics = ['screenPageViews'];
        $dimensions = ['pageTitle','streamName'];
        return $this->ga->getReport($this->propertyId, $start_date, $endDate, $metrics, $dimensions);
    }

    /**
     * @param $start_date
     * @param $endDate
     * @return array
     */
    public function topEvents($start_date, $endDate): array
    {
        $metrics = ['eventCount'];
        $dimensions = ['eventName'];
        return $this->ga->getReport($this->propertyId, $start_date, $endDate, $metrics, $dimensions);
    }

    /**
     * @param $start_date
     * @param $endDate
     * @return array
     */
    public function userTrending($start_date, $endDate): array
    {
        $metrics = ['activeUsers'];
        $dimensions = ['date'];
        return $this->ga->getReport($this->propertyId, $start_date, $endDate, $metrics, $dimensions);
    }

    /**
     * @param $start_date
     * @param $endDate
     * @return array
     */
    public function newUserCountry($start_date, $endDate): array
    {
        $metrics = ['newUsers'];
        $dimensions = ['country'];
        return $this->ga->getReport($this->propertyId, $start_date, $endDate, $metrics, $dimensions);
    }

    /**
     * @param $start_date
     * @param $endDate
     * @return array
     */
    public function sessionsCampaign($start_date, $endDate): array
    {
        $metrics = ['sessions'];
        $dimensions = ['campaignName'];
        return $this->ga->getReport($this->propertyId, $start_date, $endDate, $metrics, $dimensions);
    }

    /**
     * @param $start_date
     * @param $endDate
     * @return array
     */
    public function userSessionRevenueCountry($start_date, $endDate): array
    {
        $metrics = ['activeUsers', 'newUsers', 'totalRevenue'];
        $dimensions = ['country'];
        return $this->ga->getReport($this->propertyId, $start_date, $endDate, $metrics, $dimensions);
    }

}
