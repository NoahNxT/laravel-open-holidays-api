<?php

namespace NoahNxT\LaravelOpenHolidayApi\Resource;

use NoahNxT\LaravelOpenHolidayApi\Requests\Holidays\ReturnsListOfOfficialSchoolHolidaysForGivenCountry;
use NoahNxT\LaravelOpenHolidayApi\Requests\Holidays\ReturnsListOfPublicHolidaysForGivenCountry;
use NoahNxT\LaravelOpenHolidayApi\Requests\Holidays\ReturnsListOfPublicHolidaysFromAllCountriesForGivenDate;
use NoahNxT\LaravelOpenHolidayApi\Requests\Holidays\ReturnsListOfSchoolHolidaysFromAllCountriesForGivenDate;
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
    public function returnsListOfPublicHolidaysForGivenCountry(
        string $countryIsoCode,
        string $languageIsoCode,
        string $validFrom,
        string $validTo,
        string $subdivisionCode,
    ): Response {
        return $this->connector->send(new ReturnsListOfPublicHolidaysForGivenCountry($countryIsoCode, $languageIsoCode, $validFrom, $validTo, $subdivisionCode));
    }

    /**
     * @param  string  $languageIsoCode ISO-639-1 code of a language or empty
     * @param  string  $date Date of interest
     */
    public function returnsListOfPublicHolidaysFromAllCountriesForGivenDate(
        string $languageIsoCode,
        string $date,
    ): Response {
        return $this->connector->send(new ReturnsListOfPublicHolidaysFromAllCountriesForGivenDate($languageIsoCode, $date));
    }

    /**
     * @param  string  $countryIsoCode ISO 3166-1 code of the country
     * @param  string  $languageIsoCode ISO-639-1 code of a language or empty
     * @param  string  $validFrom Start of the date range
     * @param  string  $validTo End of the date range
     * @param  string  $subdivisionCode Code of the subdivision or empty
     */
    public function returnsListOfOfficialSchoolHolidaysForGivenCountry(
        string $countryIsoCode,
        string $languageIsoCode,
        string $validFrom,
        string $validTo,
        string $subdivisionCode,
    ): Response {
        return $this->connector->send(new ReturnsListOfOfficialSchoolHolidaysForGivenCountry($countryIsoCode, $languageIsoCode, $validFrom, $validTo, $subdivisionCode));
    }

    /**
     * @param  string  $languageIsoCode ISO-639-1 code of a language or empty
     * @param  string  $date Date of interest
     */
    public function returnsListOfSchoolHolidaysFromAllCountriesForGivenDate(
        string $languageIsoCode,
        string $date,
    ): Response {
        return $this->connector->send(new ReturnsListOfSchoolHolidaysFromAllCountriesForGivenDate($languageIsoCode, $date));
    }
}
