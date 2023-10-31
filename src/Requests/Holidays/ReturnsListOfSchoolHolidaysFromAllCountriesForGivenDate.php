<?php

namespace NoahNxT\LaravelOpenHolidayApi\Requests\Holidays;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Returns a list of school holidays from all countries for a given date.
 */
class ReturnsListOfSchoolHolidaysFromAllCountriesForGivenDate extends Request
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return '/SchoolHolidaysByDate';
    }

    /**
     * @param  string  $languageIsoCode ISO-639-1 code of a language or empty
     * @param  string  $date Date of interest
     */
    public function __construct(
        protected string $languageIsoCode,
        protected string $date,
    ) {
    }

    public function defaultQuery(): array
    {
        return ['languageIsoCode' => $this->languageIsoCode, 'date' => $this->date];
    }
}
