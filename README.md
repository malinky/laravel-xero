# Laravel Xero

Laravel wrapper for the Xero PHP SDK developed by [Michael Calcinai](https://github.com/calcinai/xero-php).

## Installation

You can install the package via composer.

``` bash
composer require craig-ramsay/laravel-xero
```

Laravel 5.5 uses Package Discovery, so you don't need to manually add the Service Provider and the Facades to your `config/app.php`.

Publish the configuration file `php artisan vendor:publish` and add your `consumer_key`, `consumer_secret` and `rsa_private_key` to the newly created `config/xero.php` file.

## Usage


### Dependency Injection

``` php
use XeroPHP\Application\PrivateApplication;

class ContactController {
    protected $xero;

    public function __construct(PrivateApplication $xero)
    {
        $this->xero = $xero;
    }
    
    public function index()
    {
        $contacts = $this->xero->load(\XeroPHP\Models\Accounting\Contact::class)->execute();
    }
}
```

### The Container

``` php
use XeroPHP\Application\PrivateApplication;

$xero = app(PrivateApplication::class);

$contacts = $xero->load(\XeroPHP\Models\Accounting\Contact::class)->execute();
```

or

``` php
$xero = app('xeroprivate');

$contacts = $xero->load(\XeroPHP\Models\Accounting\Contact::class)->execute();
```

### Facade

``` php
use XeroPrivate;

$contacts = XeroPrivate::load(\XeroPHP\Models\Accounting\Contact::class)->execute();
```

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
