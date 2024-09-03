<?php

namespace NoahNxT\LaravelOpenHolidaysApi\Resource;

use NoahNxT\LaravelOpenHolidaysApi\Requests\Regional\Countries;
use NoahNxT\LaravelOpenHolidaysApi\Requests\Regional\Languages;
use NoahNxT\LaravelOpenHolidaysApi\Requests\Regional\Subdivisions;
use NoahNxT\LaravelOpenHolidaysApi\Resource;
use Saloon\Http\Response;

class Regional extends Resource
{
    /**
     * @param  string  $languageIsoCode  ISO-639-1 code of a language or empty
     */
    public function countries(string $languageIsoCode): Response
    {
        return $this->connector->send(new Countries($languageIsoCode));
    }

    /**
     * @param  string  $languageIsoCode  ISO-639-1 code of a language or empty
     */
    public function languages(string $languageIsoCode): Response
    {
        return $this->connector->send(new Languages($languageIsoCode));
    }

    /**
     * @param  string  $countryIsoCode  ISO 3166-1 code of the country
     * @param  string  $languageIsoCode  ISO-639-1 code of a language or empty
     */
    public function subdivisions(
        string $countryIsoCode,
        string $languageIsoCode,
    ): Response {
        return $this->connector->send(new Subdivisions($countryIsoCode, $languageIsoCode));
    }
}
