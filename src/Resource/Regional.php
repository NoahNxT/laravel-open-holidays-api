<?php

namespace NoahNxT\LaravelOpenHolidayApi\Resource;

use NoahNxT\LaravelOpenHolidayApi\Requests\Regional\ReturnsListOfAllSupportedCountries;
use NoahNxT\LaravelOpenHolidayApi\Requests\Regional\ReturnsListOfAllUsedLanguages;
use NoahNxT\LaravelOpenHolidayApi\Requests\Regional\ReturnsListOfRelevantSubdivisionsForSupportedCountryIfAny;
use NoahNxT\LaravelOpenHolidayApi\Resource;
use Saloon\Http\Response;

class Regional extends Resource
{
    /**
     * @param  string  $languageIsoCode ISO-639-1 code of a language or empty
     */
    public function returnsListOfAllSupportedCountries(string $languageIsoCode): Response
    {
        return $this->connector->send(new ReturnsListOfAllSupportedCountries($languageIsoCode));
    }

    /**
     * @param  string  $languageIsoCode ISO-639-1 code of a language or empty
     */
    public function returnsListOfAllUsedLanguages(string $languageIsoCode): Response
    {
        return $this->connector->send(new ReturnsListOfAllUsedLanguages($languageIsoCode));
    }

    /**
     * @param  string  $countryIsoCode ISO 3166-1 code of the country
     * @param  string  $languageIsoCode ISO-639-1 code of a language or empty
     */
    public function returnsListOfRelevantSubdivisionsForSupportedCountryIfAny(
        string $countryIsoCode,
        string $languageIsoCode,
    ): Response {
        return $this->connector->send(new ReturnsListOfRelevantSubdivisionsForSupportedCountryIfAny($countryIsoCode, $languageIsoCode));
    }
}
