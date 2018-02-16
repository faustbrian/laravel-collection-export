# Laravel Collection Export

[![Build Status](https://img.shields.io/travis/faustbrian/Laravel-Collection-Export/master.svg?style=flat-square)](https://travis-ci.org/faustbrian/Laravel-Collection-Export)
[![PHP from Packagist](https://img.shields.io/packagist/php-v/faustbrian/laravel-collection-export.svg?style=flat-square)]()
[![Latest Version](https://img.shields.io/github/release/faustbrian/Laravel-Collection-Export.svg?style=flat-square)](https://github.com/faustbrian/Laravel-Collection-Export/releases)
[![License](https://img.shields.io/packagist/l/faustbrian/Laravel-Collection-Export.svg?style=flat-square)](https://packagist.org/packages/faustbrian/Laravel-Collection-Export)

## Installation

Require this package, with [Composer](https://getcomposer.org/), in the root directory of your project.

```js
composer require faustbrian/collection-export
```

And then include the service provider within `app/config/app.php`.

```php
BrianFaust\CollectionExport\CollectionExportServiceProvider::class
```

## Usage

##### Export/Download an `Illuminate\Support\Collection`

```php
(new BrianFaust\CollectionExport\Export)->filename('users')->csv(User::get());
(new BrianFaust\CollectionExport\Export)->filename('users')->json(User::get());
(new BrianFaust\CollectionExport\Export)->filename('users')->pdf(User::get());
(new BrianFaust\CollectionExport\Export)->filename('users')->xls(User::get());
(new BrianFaust\CollectionExport\Export)->filename('users')->xlsx(User::get());
(new BrianFaust\CollectionExport\Export)->filename('users')->xml(User::get());
(new BrianFaust\CollectionExport\Export)->filename('users')->yaml(User::get());
(new BrianFaust\CollectionExport\Export)->filename('users')->yamlInline(User::get());
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information what has changed recently.

## Testing

``` bash
$ phpunit
```

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

## Security

If you discover a security vulnerability within this package, please send an e-mail to hello@brianfaust.me. All security vulnerabilities will be promptly addressed.

## Credits

- [Brian Faust](https://github.com/faustbrian)
- [All Contributors](../../contributors)

## License

[MIT](LICENSE) © [Brian Faust](https://brianfaust.me)
