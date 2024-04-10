<?php

namespace Xtodx\Oracle\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Xtodx\Oracle\Oracle
 */
class Oracle extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \Xtodx\Oracle\Oracle::class;
    }
}
