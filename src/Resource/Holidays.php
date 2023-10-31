<?php

namespace NoahNxT\LaravelOpenHolidayApi\Resource;

use NoahNxT\LaravelOpenHolidayApi\Requests\Holidays\PublicHolidays;
use NoahNxT\LaravelOpenHolidayApi\Requests\Holidays\PublicHolidaysByDate;
use NoahNxT\LaravelOpenHolidayApi\Requests\Holidays\SchoolHolidays;
use NoahNxT\LaravelOpenHolidayApi\Requests\Holidays\SchoolHolidaysByDate;
use NoahNxT\LaravelOpenHolidayApi\Resource;
use Saloon\Http\Response;

class Holidays extends Resource
{
    /**
     * @param  string  $countryIsoCode ISO 3166-1 code of the country
     * @param  string  $languageIsoCode ISO-639-1 code of a language or empty
     * @param  string  $validFrom Start of the date range
     * @param  string  $validTo End of the date range
     * @param  string  $subdivisionCode Code of the subdivision or empty
     */
    public function publicHolidays(
        string $countryIsoCode,
        string $languageIsoCode,
        string $validFrom,
        string $validTo,
        string $subdivisionCode,
    ): Response {
        return $this->connector->send(new PublicHolidays($countryIsoCode, $languageIsoCode, $validFrom, $validTo,
            $subdivisionCode));
    }

    /**
     * @param  string  $languageIsoCode ISO-639-1 code of a language or empty
     * @param  string  $date Date of interest
     */
    public function publicHolidaysByDate(
        string $languageIsoCode,
        string $date,
    ): Response {
        return $this->connector->send(new PublicHolidaysByDate($languageIsoCode, $date));
    }

    /**
     * @param  string  $countryIsoCode ISO 3166-1 code of the country
     * @param  string  $languageIsoCode ISO-639-1 code of a language or empty
     * @param  string  $validFrom Start of the date range
     * @param  string  $validTo End of the date range
     * @param  string  $subdivisionCode Code of the subdivision or empty
     */
    public function schoolHolidays(
        string $countryIsoCode,
        string $languageIsoCode,
        string $validFrom,
        string $validTo,
        string $subdivisionCode,
    ): Response {
        return $this->connector->send(new SchoolHolidays($countryIsoCode, $languageIsoCode, $validFrom, $validTo, $subdivisionCode));
    }

    /**
     * @param  string  $languageIsoCode ISO-639-1 code of a language or empty
     * @param  string  $date Date of interest
     */
    public function schoolHolidaysByDate(
        string $languageIsoCode,
        string $date,
    ): Response {
        return $this->connector->send(new SchoolHolidaysByDate($languageIsoCode, $date));
    }
}
