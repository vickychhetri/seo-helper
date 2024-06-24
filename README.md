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

## Contributing

Contributions are welcome! Fork the repository, make your changes, and submit a pull request.
We welcome contributions to SEO Helper! If you'd like to contribute, please follow these steps:


1. Fork the repository on GitHub.
2. Clone your forked repository (`git clone https://github.com/your-username/seo-helper.git`).
3. Create a new branch for your feature or bug fix (`git checkout -b feature/awesome-feature`).
4. Make changes and add tests if possible.
5. Commit your changes (`git commit -am 'Add awesome feature'`).
6. Push to the branch (`git push origin feature/awesome-feature`).
7. Create a new Pull Request on GitHub.


## Issues

If you encounter any problems or have suggestions, please open an issue on the [Issues](https://github.com/vickychhetri/seo-helper/issues) page.

## License

This package is open-source software licensed under the [MIT license](LICENSE).


