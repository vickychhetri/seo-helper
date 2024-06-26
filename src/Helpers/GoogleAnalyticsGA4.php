<?php
namespace Vickychhetri\SEOHelper\Helpers;

use Google\Client;
use Google\Service\AnalyticsData;

class GoogleAnalyticsGA4
{
    private $client;
    private $analyticsData;

    public function __construct($keyFilePath)
    {

        $this->client = new Client();
        $this->client->setAuthConfig($keyFilePath);
        $this->client->addScope('https://www.googleapis.com/auth/analytics.readonly');
        $this->analyticsData = new AnalyticsData($this->client);
    }

    public function getReport($propertyId, $startDate, $endDate, $metrics, $dimensions = [])
    {
        $dateRange = new AnalyticsData\DateRange();
        $dateRange->setStartDate($startDate);
        $dateRange->setEndDate($endDate);

        $metricObjects = [];
        foreach ($metrics as $metric) {
            $metricObj = new AnalyticsData\Metric();
            $metricObj->setName($metric);
            $metricObjects[] = $metricObj;
        }

        $dimensionObjects = [];
        foreach ($dimensions as $dimension) {
            $dimensionObj = new AnalyticsData\Dimension();
            $dimensionObj->setName($dimension);
            $dimensionObjects[] = $dimensionObj;
        }

        $request = new AnalyticsData\RunReportRequest();
        $request->setDateRanges([$dateRange]);
        $request->setMetrics($metricObjects);
        $request->setDimensions($dimensionObjects);

        $response = $this->analyticsData->properties->runReport("properties/{$propertyId}", $request);

        $result = [];

        foreach ($response->getRows() as $row) {
            $dimensionValues = $row->getDimensionValues(); // Get dimensions as an array
            $metricValues = $row->getMetricValues(); // Get metrics as an array

            $dimensionsData = [];
            foreach ($dimensionValues as $dimensionValue) {
                $dimensionsData[] = $dimensionValue->getValue();
            }

            $metricsData = [];
            foreach ($metricValues as $metricValue) {
                $metricsData[] = $metricValue->getValue();
            }

            $result[] = [
                'dimensions' => $dimensionsData,
                'metrics' => $metricsData,
            ];
        }

        return $result;
    }
}
