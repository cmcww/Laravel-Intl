<?php namespace Cmcww\LaravelIntl\Facades;

use Illuminate\Support\Facades\Facade;

class Currency extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'intl.currency';
    }
}