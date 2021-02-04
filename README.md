# Settings for Laravel 5.4 and up
<p align="center">
<a href="https://packagist.org/packages/finagin/json"><img src="https://img.shields.io/packagist/v/finagin/json.svg?style=flat-square" alt="Latest Version on Packagist"></a>
<a href="https://styleci.io/repos/335910083"><img src="https://styleci.io/repos/335910083/shield" alt="StyleCI"></a>
<a href="https://packagist.org/packages/finagin/json"><img src="https://img.shields.io/packagist/dt/finagin/json.svg?style=flat-square" alt="Total Downloads"></a>
<a href="https://github.com/finagin/json/blob/master/LICENSE"><img src="https://img.shields.io/github/license/mashape/apistatus.svg?style=flat-square" slt="license"></a>
<br>
<a href="https://github.com/finagin/json"><img src="https://img.shields.io/github/stars/finagin/json.svg?style=social&label=Star" alt="GitHub stars"></a>
</p>

* [Installation](#installation)
* [Usage](usage)
* [License](license)

## Installation

This package can be used in Laravel 5.4 or higher.
You can install the package via composer:
```bash
composer require finagin/json
```

## Usage

```php
use Finagin\Json\Facades\Json;

try {
    // decode as object
    Json::decode($jsonString);
    Json::decodeAsObject($jsonString);
    
    // decode as array
    Json::decode($jsonString, 0, true);
    Json::decodeAsObject($jsonString);
    
    Json::encode($toJsonObject, JSON_PRETTY_PRINT);
} catch (\JsonException $exception) {
    //
}

```

## License

The MIT License ([MIT](https://opensource.org/licenses/MIT)). Please see [License File](https://github.com/finagin/json/blob/master/LICENSE) for more information.
