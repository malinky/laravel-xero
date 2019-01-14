# Laravel Xero

This is where your description should go. Try and limit it to a paragraph or two.

## Installation

You can install the package via composer:

``` bash
composer require craig-ramsay/laravel-xero
```

## Usage

### Dependency Injection

``` php
use XeroPHP\Application\PrivateApplication;

class App {
    protected $xero;

    public function __construct(PrivateApplication $xero) {
        $this->xero = $xero;
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
