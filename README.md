# SEO Helper for Laravel

SEO Helper is a Laravel package designed to streamline SEO optimizations within Laravel applications. It provides utilities to manage SEO settings efficiently.

## Installation

You can install this package via Composer. Run the following command in your terminal:

composer require vickychhetri/seo-helper

## Usage

### Publish Configuration

To publish the configuration file, use the `vendor:publish` Artisan command with the `--tag=config` option:

php artisan vendor --tag=config

This command will copy the configuration file (`seo_helper.php`) to your Laravel project's `config` directory, allowing you to customize SEO settings.

### Publish Views
php artisan vendor --tag=views
If your package includes views that users might want to customize, you can publish them using the `--tag=views` option:


This will copy the views to your Laravel project's `resources/views/vendor/seo_helper` directory, where you can modify them as needed.

## Features

- **SEO Configuration:** Customize SEO-related settings easily.
- **Customizable Views:** Modify SEO-related views to fit your application's design.
- **Ease of Use:** Integrate SEO enhancements seamlessly into your Laravel project.

## Usage

Initializing SEOHelper
To start using SEO Helper, you need to initialize the SEOHelper class:

`use Vickychhetri\SEOHelper\Helpers\SEOHelper;`

`SEOHelper $seoHelper = new SEOHelper();`

Setting Meta Tags

You can set meta tags for title, description, and keywords using the setMeta() method:

`$seoHelper->setMeta('Page Title', 'Page Description', 'keyword1, keyword2');
`
Setting Open Graph Tags

Set Open Graph tags such as title, description, URL, type, and image with the setOpenGraph() method:

`$seoHelper->setOpenGraph('Open Graph Title', 'Open Graph Description', 'https://example.com', 'article', 'https://example.com/image.jpg');
`

Setting Twitter Card Tags

For Twitter Cards, set title, description, and image using the setTwitterCard() method:

`$seoHelper->setTwitterCard('Twitter Card Title', 'Twitter Card Description', 'https://example.com/image.jpg');
`

Generating HTML Meta Tags

Once you've set your SEO attributes, generate the HTML meta tags using the generate() method:

`$seoHtml = $seoHelper->generate();
`

Outputting HTML in Views

In your Blade views, output the generated HTML using {!! !!} to render HTML content:

`{!! $seoHtml !!}
`

## config seo_helper

`[ 'key-path' => 'path/to/projectvicky-0ef21a587443.json', 'property' => '2866XXXX', ];`

## Instantiate the SeoAnalytics object
`$seoAnalytics = new SeoAnalytics();`

**Call the activeUserSessionCountyWise method:**
Once you have instantiated the object, you can call the method activeUserSessionCountyWise with the appropriate arguments ($start_date and $endDate):

`$start_date = '2024-01-01';`
`$endDate = '2024-06-30';`

`$seoAnalytics->activeUserSessionCountyWise($start_date, $endDate);`

## Methods Available 
- `activeUserSessionCountyWise($start_date, $end_date)`: Retrieves active user session data county-wise. 
- `activeUserSessionCityWise($start_date, $end_date)`: Retrieves active user session data city-wise. 
- `activeUserSessionBrowserWise($start_date, $end_date)`: Retrieves active user session data browser-wise.
 - `activeUserSessionDeviceWise($start_date, $end_date)`: Retrieves active user session data device-wise. 
- `screenPageViews($start_date, $end_date)`: Retrieves screen page views data. - `topEvents($start_date, $end_date)`: Retrieves top events data.
 - `userTrending($start_date, $end_date)`: Retrieves trending user data.
 - `newUserCountry($start_date, $end_date)`: Retrieves new user data by country.
 - `sessionsCampaign($start_date, $end_date)`: Retrieves session data by campaign.
 - `userSessionRevenueCountry($start_date, $end_date)`: Retrieves user session revenue data by country.

## Additional Methods

Individual Attribute Setters
You can also set individual SEO attributes directly using these methods:

- setTitle(string $title): Set the page title.

- setDescription(string $description): Set the page description.

- setKeywords(string $keywords): Set the page keywords.

Open Graph and Twitter Card Specific Setters

- setUrl(string $url): Set the URL for Open Graph.

- setType(string $type): Set the type for Open Graph (e.g., article, website).

- setImage(string $image): Set the image URL for Open Graph and Twitter Card.

# Canonical URLs
Define a default canonical URL or leave it as null for dynamic setting

# Schema.org Markup
An empty array initializes for dynamic addition of schema.org markup

`<script type="application/ld+json">
{
"@context": "https://schema.org",
"@type": "Article",
"headline": "",
"image": "",  
"author": {
"@type": "",
"name": ""
},  
"publisher": {
"@type": "Organization",
"name": "",
"logo": {
"@type": "ImageObject",
"url": ""
}
},
"datePublished": ""
}
</script>`

## Customization

Customize default SEO settings by editing the seo_helper.php configuration file in your Laravel project.


## Contributing

Contributions are welcome! Fork the repository, make your changes, and submit a pull request.


## Issues

If you encounter any problems or have suggestions, please open an issue on the [Issues](https://github.com/vickychhetri/seo-helper/issues) page.

## License

This package is open-source software licensed under the [MIT license](LICENSE).


