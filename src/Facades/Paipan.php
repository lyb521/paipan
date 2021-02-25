<?php

namespace Bazi\Paipan\Facades;

use Illuminate\Support\Facades\Facade;

class Paipan extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor(): string
    {
        return 'paipan';
    }
}
