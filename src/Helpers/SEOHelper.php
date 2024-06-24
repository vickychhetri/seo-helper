<?php

// src/Helpers/SEOHelper.php
namespace Vickychhetri\SEOHelper\Helpers;

class SEOHelper
{
    protected array $meta;
    protected array $openGraph;
    protected array $twitterCard;
    protected ?string $canonicalUrl = null;
    protected array $schemas;
    protected array $metaTags;

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
            'canonicalUrl' => $this->canonicalUrl,
            'schemas' => $this->schemas,
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

    /**
     * Set canonical URL
     * A canonical URL is an HTML link element that helps search engines determine the preferred URL for a webpage when multiple URLs contain similar or duplicate content. It's crucial for SEO to avoid duplicate content issues and consolidate ranking signals to a single URL.
     *
     * @param string $url
     * @return void
     */
    public function setCanonicalUrl(string $url): void
    {
        $this->canonicalUrl = $url;
    }

    /**
     * Get Canonical URL
     * @return string|null
     */
    public function getCanonicalUrl(): ?string
    {
        return $this->canonicalUrl;
    }


    /***
     * Schema.org Markup Integration
     *
     * Schema.org markup helps search engines understand the content on your web pages better, potentially enhancing search results with rich snippets. Implement methods to set and manage structured data for various entities.
     *
     * @param string $type
     * @param array $properties
     * @return void
     */
    public function addSchema(string $type, array $properties): void
    {
        // Implement logic to add schema markup
        $this->schemas[$type] = $properties;
    }

    /**
     * @return array
     */
    public function getSchemas(): array
    {
        return $this->schemas;
    }

    /***
     * Meta Tag Management
     * Extend meta tag management beyond basic metadata to include additional meta tags like author, publisher, robots directives, viewport settings, etc.
     *
     * Set Meta tags
     * @param string $name
     * @param string $content
     * @return void
     */
    public function setMetaTag(string $name, string $content): void
    {
        // Implement logic to set meta tags
        $this->metaTags[$name] = $content;
    }

    /**
     * return all meta tags
     * @return array
     */
    public function getMetaTags(): array
    {
        return $this->metaTags;
    }


    /**
     * Dynamic Sitemap Generation
       Automatically generate and manage XML sitemaps for better search engine crawling and indexing
     * @param array $urls
     * @return void
     */
    public function generateSitemap(array $urls): void
    {
        // Implement logic to generate sitemap XML
        $xml = '<?xml version="1.0" encoding="UTF-8"?>';
        $xml .= '<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">';
        foreach ($urls as $url) {
            $xml .= '<url><loc>' . htmlspecialchars($url) . '</loc></url>';
        }
        $xml .= '</urlset>';

        file_put_contents('sitemap.xml', $xml);
    }






}
