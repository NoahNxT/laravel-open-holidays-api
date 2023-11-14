<?php

namespace NoahNxT\LaravelOpenHolidayApi\Requests\Holidays;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Returns list of official school holidays for a given country
 */
class SchoolHolidays extends Request
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return '/SchoolHolidays';
    }

    /**
     * @param  string  $countryIsoCode ISO 3166-1 code of the country
     * @param  string  $languageIsoCode ISO-639-1 code of a language or empty
     * @param  string  $validFrom Start of the date range
     * @param  string  $validTo End of the date range
     * @param  string  $subdivisionCode Code of the subdivision or empty
     */
    public function __construct(
        protected string $countryIsoCode,
        protected string $languageIsoCode,
        protected string $validFrom,
        protected string $validTo,
        protected string $subdivisionCode,
    ) {
    }

    public function defaultQuery(): array
    {
        return [
            'countryIsoCode' => $this->countryIsoCode,
            'languageIsoCode' => $this->languageIsoCode,
            'validFrom' => $this->validFrom,
            'validTo' => $this->validTo,
            'subdivisionCode' => $this->subdivisionCode,
        ];
    }
}
