<?php
// config/seo_helper.php
return [
    'meta' => [
        'title' => 'Default Title',
        'description' => 'Default Description',
        'keywords' => 'keyword1, keyword2, keyword3',
    ],
    'open_graph' => [
        'title' => 'Default OG Title',
        'description' => 'Default OG Description',
        'url' => null,
        'type' => 'website',
        'image' => null,
    ],
    'twitter_card' => [
        'card' => 'summary',
        'site' => '@yoursite',
        'title' => 'Default Twitter Title',
        'description' => 'Default Twitter Description',
        'image' => null,
    ],
    'canonical_url' => null, // Default canonical URL
    'schemas' => [], // Default schema.org markup, empty array by default
];

