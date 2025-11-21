<?php

namespace Ronaldmirabal\TipoCambioDominicana\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Ronaldmirabal\TipoCambioDominicana\TipoCambioDominicana
 */
class TipoCambioDominicana extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return \Ronaldmirabal\TipoCambioDominicana\TipoCambioDominicana::class;
    }
}
