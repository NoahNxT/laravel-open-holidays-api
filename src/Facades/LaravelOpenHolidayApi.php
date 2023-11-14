<?php

namespace NoahNxT\LaravelOpenHolidayApi\Facades;

use Illuminate\Support\Facades\Facade;
use NoahNxT\LaravelOpenHolidayApi\HolidayApi;

/**
 * @see \NoahNxT\LaravelOpenHolidayApi\LaravelOpenHolidayApi
 */
class LaravelOpenHolidayApi extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return HolidayApi::class;
    }
}
