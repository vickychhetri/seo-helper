<?php

// src/Helpers/SEOHelper.php
namespace Vickychhetri\SEOHelper\Helpers;

class SEOHelper
{
    protected array $meta;
    protected array $openGraph;
    protected array $twitterCard;

    /**
     * Initialize the Meta Part from default config file
     */
    public function __construct()
    {
        $this->meta = config('seo_helper.meta');
        $this->openGraph = config('seo_helper.open_graph');
        $this->twitterCard = config('seo_helper.twitter_card');
    }

    /**
     * Set Meta Values
     * @param string $title
     * @param string $description
     * @param string $keywords
     * @return void
     */
    public function setMeta(string $title, string $description, string $keywords): void
    {
        $this->meta['title'] = $title;
        $this->meta['description'] = $description;
        $this->meta['keywords'] = $keywords;
    }

    /**
     * Set Open Graph Values
     *
     * @param string $title
     * @param string $description
     * @param string|null $url
     * @param string $type
     * @param string|null $image
     * @return void
     */
    public function setOpenGraph(string $title, string $description, ?string $url, string $type, ?string $image): void
    {
        $this->openGraph['title'] = $title;
        $this->openGraph['description'] = $description;
        $this->openGraph['url'] = $url;
        $this->openGraph['type'] = $type;
        $this->openGraph['image'] = $image;
    }

    /**
     * Set Twitter Cards Values
     * @param string $title
     * @param string $description
     * @param string|null $image
     * @return void
     */
    public function setTwitterCard(string $title, string $description, ?string $image): void
    {
        $this->twitterCard['title'] = $title;
        $this->twitterCard['description'] = $description;
        $this->twitterCard['image'] = $image;
    }

    /**
     * Generate the Meta HTML tags with given Config Values
     * @return string
     */
    public function generate(): string
    {
        return view('seo_helper::meta', [
            'meta' => $this->meta,
            'openGraph' => $this->openGraph,
            'twitterCard' => $this->twitterCard,
        ])->render();
    }

    /**
     * Set Same Title for All
     * @param string $title
     * @return void
     */
    public function setTitle(string $title): void
    {
        $this->meta['title'] = $title;
        $this->openGraph['title'] = $title;
        $this->twitterCard['title'] = $title;
    }

    /**
     * Set Same Description for All
     * @param string $description
     * @return void
     */
    public function setDescription(string $description): void
    {
        $this->meta['description'] = $description;
        $this->openGraph['description'] = $description;
        $this->twitterCard['description'] = $description;
    }

    /**
     * Set Same Keywords for all
     * @param string $keywords
     * @return void
     */
    public function setKeywords(string $keywords): void
    {
        $this->meta['keywords'] = $keywords;
    }

    /**
     * Set Open Graph url
     * @param string $url
     * @return void
     */
    public function setUrl(string $url): void
    {
        $this->openGraph['url'] = $url;
    }

    /**
     * Set Type of Open Graph
     * @param string $type
     * @return void
     */
    public function setType(string $type): void
    {
        $this->openGraph['type'] = $type;
    }

    /**
     * Set Image in Open Graph and Twitter card
     * @param string $image
     * @return void
     */
    public function setImage(string $image): void
    {
        $this->openGraph['image'] = $image;
        $this->twitterCard['image'] = $image;
    }
}
