# PHP client library for AfiEsca SOAP API

[![Latest Version on Packagist](https://img.shields.io/packagist/v/filippo-toso/afiesca.svg?style=flat-square)](https://packagist.org/packages/filippo-toso/afiesca)

With this library you can call theAfiEsca SOAP methods in a object oriented way.

## Installation

You can install the package via composer:

```bash
composer require filippo-toso/afiesca
```

## Usage

This library supports all the requests and responses available. They can be executed in the same way:

- Create the response object
- Execute the request
- Use the methods in the answer to get the information you need

You can browser the library source code to understand which methods are available. Usually the request object has the same name as the method called and response object names end with "Response" (ie. Simulate and SimulateResponse).

### Laravel support

You can also use this library in your Laravel applications.

The first step whould be to publish the configuration file:

```
php artisan vendor:publish --tag=config --provider="FilippoToso\AfiEsca\ServiceProvider"
```

Then insert your credentials in the config\afiesca.php file.

### Schema version

The current version of this library supports the 1.1 schema version.

### Security

If you discover any security related issues, please email filippo@toso.dev instead of using the issue tracker.

## Credits

- [Filippo Toso](https://github.com/filippotoso)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
