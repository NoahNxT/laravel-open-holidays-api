<?php

namespace NoahNxT\LaravelOpenHolidaysApi;

use NoahNxT\LaravelOpenHolidaysApi\Resource\Holidays;
use NoahNxT\LaravelOpenHolidaysApi\Resource\Regional;
use NoahNxT\LaravelOpenHolidaysApi\Resource\Statistics;
use Saloon\Http\Connector;

/**
 * OpenHolidays API v1
 *
 * Open Data API for public and school holidays
 */
class OpenHolidaysApi extends Connector
{
    public function resolveBaseUrl(): string
    {
        return 'https://openholidaysapi.org';
    }

    public function holidays(): Holidays
    {
        return new Holidays($this);
    }

    public function regional(): Regional
    {
        return new Regional($this);
    }

    public function statistics(): Statistics
    {
        return new Statistics($this);
    }
}
