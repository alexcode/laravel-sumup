<?php

/**
 * Part of the Sumup Laravel package.
 */

namespace Alexcode\Sumup\Laravel\Facades;

use Illuminate\Support\Facades\Facade;

class Sumup extends Facade
{
    /**
     * {@inheritDoc}
     */
    protected static function getFacadeAccessor()
    {
        return 'sumup';
    }
}
