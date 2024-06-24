<?php

// src/Helpers/SEOHelper.php
namespace Vickychhetri\SEOHelper\Helpers;

class SEOHelper
{
    public array $meta;
    public array $openGraph;
    public array $twitterCard;

    public function __construct()
    {
        $this->meta = config('seo_helper.meta');
        $this->openGraph = config('seo_helper.open_graph');
        $this->twitterCard = config('seo_helper.twitter_card');
    }

    public function setMeta(string $title, string $description, string $keywords): void
    {
        $this->meta['title'] = $title;
        $this->meta['description'] = $description;
        $this->meta['keywords'] = $keywords;
    }

    public function setOpenGraph(string $title, string $description, ?string $url, string $type, ?string $image): void
    {
        $this->openGraph['title'] = $title;
        $this->openGraph['description'] = $description;
        $this->openGraph['url'] = $url;
        $this->openGraph['type'] = $type;
        $this->openGraph['image'] = $image;
    }

    public function setTwitterCard(string $title, string $description, ?string $image): void
    {
        $this->twitterCard['title'] = $title;
        $this->twitterCard['description'] = $description;
        $this->twitterCard['image'] = $image;
    }

    public function generate(): string
    {
        return view('seo_helper::meta', [
            'meta' => $this->meta,
            'openGraph' => $this->openGraph,
            'twitterCard' => $this->twitterCard,
        ])->render();
    }
}
