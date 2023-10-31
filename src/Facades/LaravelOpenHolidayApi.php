<?php

namespace NoahNxT\LaravelOpenHolidayApi\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \NoahNxT\LaravelOpenHolidayApi\LaravelOpenHolidayApi
 */
class LaravelOpenHolidayApi extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return \NoahNxT\LaravelOpenHolidayApi\LaravelOpenHolidayApi::class;
    }
}
