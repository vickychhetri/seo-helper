<?php

// tests/SEOHelperTest.php
namespace Vickychhetri\SEOHelper\Tests;

use Vickychhetri\SEOHelper\Helpers\SEOHelper;
use PHPUnit\Framework\TestCase;

class SEOHelperTest extends TestCase
{
    public function testSetMeta()
    {
        $config = [
            'meta' => [
                'title' => 'Default Title',
                'description' => 'Default Description',
                'keywords' => 'keyword1, keyword2',
            ],
            // Add other config keys as needed
        ];

        $seoHelper = new SEOHelper();
        $seoHelper->setMeta('Title', 'Description', 'keyword1, keyword2');

        $this->assertEquals('Title', $seoHelper->meta['title']);
        $this->assertEquals('Description', $seoHelper->meta['description']);
        $this->assertEquals('keyword1, keyword2', $seoHelper->meta['keywords']);
    }
}
