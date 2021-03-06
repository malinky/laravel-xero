# Laravel Xero

Laravel wrapper for the Xero PHP SDK developed by [Michael Calcinai](https://github.com/calcinai/xero-php).

## Installation

Install the package via composer.

``` bash
composer require craig-ramsay/laravel-xero
```

Laravel 5.5 uses Package Discovery, therefore the Service Provider and Facades are registered automatically.

Publish the configuration file by running the `php artisan vendor:publish` command. Add your Xero `consumer_key`, `consumer_secret` and `rsa_private_key` to the newly created `config/xero.php` file. The xero.php config file contains instructions on how to generate these values.

## Usage

Use the classes by resolving from the Container or via the Facades. The examples below show different methods of accessing a Xero Private Application and returning the contacts list. The package also allows you to access Xero Partner or Public applications.

### Automatic Injection

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

### Resolve out of the Container

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
