<?php

namespace NoahNxT\LaravelOpenHolidaysApi\Requests\Regional;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Returns a list of all used languages
 */
class Languages extends Request
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return '/Languages';
    }

    /**
     * @param  string  $languageIsoCode  ISO-639-1 code of a language or empty
     */
    public function __construct(
        protected string $languageIsoCode,
    ) {}

    public function defaultQuery(): array
    {
        return ['languageIsoCode' => $this->languageIsoCode];
    }
}
