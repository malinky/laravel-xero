<?php

namespace CraigRamsay\Xero\Facades;

use Illuminate\Support\Facades\Facade;

class XeroPrivate extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'xeroprivate';
    }
}
