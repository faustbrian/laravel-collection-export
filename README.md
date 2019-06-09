# Laravel Collection Export

[![Build Status](https://img.shields.io/travis/artisanry/Collection-Export/master.svg?style=flat-square)](https://travis-ci.org/artisanry/Collection-Export)
[![PHP from Packagist](https://img.shields.io/packagist/php-v/artisanry/collection-export.svg?style=flat-square)]()
[![Latest Version](https://img.shields.io/github/release/artisanry/Collection-Export.svg?style=flat-square)](https://github.com/artisanry/Collection-Export/releases)
[![License](https://img.shields.io/packagist/l/artisanry/Collection-Export.svg?style=flat-square)](https://packagist.org/packages/artisanry/Collection-Export)

## Installation

Require this package, with [Composer](https://getcomposer.org/), in the root directory of your project.

```js
composer require artisanry/collection-export
```

And then include the service provider within `app/config/app.php`.

```php
Artisanry\CollectionExport\CollectionExportServiceProvider::class
```

## Usage

##### Export/Download an `Illuminate\Support\Collection`

```php
(new Artisanry\CollectionExport\Export)->filename('users')->csv(User::get());
(new Artisanry\CollectionExport\Export)->filename('users')->json(User::get());
(new Artisanry\CollectionExport\Export)->filename('users')->pdf(User::get());
(new Artisanry\CollectionExport\Export)->filename('users')->xls(User::get());
(new Artisanry\CollectionExport\Export)->filename('users')->xlsx(User::get());
(new Artisanry\CollectionExport\Export)->filename('users')->xml(User::get());
(new Artisanry\CollectionExport\Export)->filename('users')->yaml(User::get());
(new Artisanry\CollectionExport\Export)->filename('users')->yamlInline(User::get());
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information what has changed recently.

## Testing

```bash
$ phpunit
```

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

## Security

If you discover a security vulnerability within this package, please send an e-mail to hello@basecode.sh. All security vulnerabilities will be promptly addressed.

## Credits

-   [Brian Faust](https://github.com/faustbrian)
-   [All Contributors](../../contributors)

## License

Mozilla Public License Version 2.0 ([MPL-2.0](./LICENSE)).
