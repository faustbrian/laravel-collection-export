# Laravel Collection Export

## Installation

Require this package, with [Composer](https://getcomposer.org/), in the root directory of your project.

```js
composer require faustbrian/collection-export
```

And then include the service provider within `app/config/app.php`.

```php
'providers' => [
    BrianFaust\CollectionExport\ServiceProvider::class
];
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

## Security

If you discover a security vulnerability within this package, please send an e-mail to Brian Faust at hello@brianfaust.de. All security vulnerabilities will be promptly addressed.

## License

The [The MIT License (MIT)](LICENSE). Please check the [LICENSE](LICENSE) file for more details.
