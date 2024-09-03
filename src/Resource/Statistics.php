<?php

namespace NoahNxT\LaravelOpenHolidaysApi\Resource;

use NoahNxT\LaravelOpenHolidaysApi\Requests\Statistics\StatisticsPublicHolidays;
use NoahNxT\LaravelOpenHolidaysApi\Requests\Statistics\StatisticsSchoolHolidays;
use NoahNxT\LaravelOpenHolidaysApi\Resource;
use Saloon\Http\Response;

class Statistics extends Resource
{
    /**
     * @param  string  $countryIsoCode  ISO 3166-1 code of the country
     * @param  string  $subdivisionCode  Code of the subdivision or empty
     */
    public function statisticsPublicHolidays(
        string $countryIsoCode,
        string $subdivisionCode,
    ): Response {
        return $this->connector->send(new StatisticsPublicHolidays($countryIsoCode, $subdivisionCode));
    }

    /**
     * @param  string  $countryIsoCode  ISO 3166-1 code of the country
     * @param  string  $subdivisionCode  Code of the subdivision or empty
     */
    public function statisticsSchoolHolidays(
        string $countryIsoCode,
        string $subdivisionCode,
    ): Response {
        return $this->connector->send(new StatisticsSchoolHolidays($countryIsoCode, $subdivisionCode));
    }
}
