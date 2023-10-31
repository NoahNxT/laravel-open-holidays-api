# Laravel package for the Open Holiday API

[![Latest Version on Packagist](https://img.shields.io/packagist/v/noahnxt/laravel-open-holiday-api.svg?style=flat-square)](https://packagist.org/packages/noahnxt/laravel-open-holiday-api)
[![GitHub Tests Action Status](https://img.shields.io/github/actions/workflow/status/noahnxt/laravel-open-holiday-api/run-tests.yml?branch=main&label=tests&style=flat-square)](https://github.com/noahnxt/laravel-open-holiday-api/actions?query=workflow%3Arun-tests+branch%3Amain)
[![GitHub Code Style Action Status](https://img.shields.io/github/actions/workflow/status/noahnxt/laravel-open-holiday-api/fix-php-code-style-issues.yml?branch=main&label=code%20style&style=flat-square)](https://github.com/noahnxt/laravel-open-holiday-api/actions?query=workflow%3A"Fix+PHP+code+style+issues"+branch%3Amain)
[![Total Downloads](https://img.shields.io/packagist/dt/noahnxt/laravel-open-holiday-api.svg?style=flat-square)](https://packagist.org/packages/noahnxt/laravel-open-holiday-api)

A package to use the holidays API from the [Open Holiday API](https://www.openholidaysapi.org/).

## Installation

You can install the package via composer:

```bash
composer require noahnxt/laravel-open-holiday-api
```

## Usage

```php
$laravelOpenHolidayApi = new NoahNxT\LaravelOpenHolidayApi();
echo $laravelOpenHolidayApi->echoPhrase('Hello, NoahNxT!');
```

## Testing

```bash
composer test
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

## Security Vulnerabilities

Please review [our security policy](../../security/policy) on how to report security vulnerabilities.

## Credits

- [Noah Gillard](https://github.com/NoahNxT)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
