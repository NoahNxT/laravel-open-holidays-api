<?php

namespace NoahNxT\LaravelOpenHolidaysApi\Facades;

use Illuminate\Support\Facades\Facade;
use NoahNxT\LaravelOpenHolidaysApi\OpenHolidaysApi;

/**
 * @see \NoahNxT\LaravelOpenHolidaysApi\LaravelOpenHolidayApi
 */
class LaravelOpenHolidayApi extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return OpenHolidaysApi::class;
    }
}
