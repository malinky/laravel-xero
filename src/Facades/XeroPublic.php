<?php

namespace CraigRamsay\Xero\Facades;

class XeroPublic extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'xeropublic';
    }
}
