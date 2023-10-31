<?php

namespace NoahNxT\LaravelOpenHolidayApi\Requests\Regional;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Returns a list of relevant subdivisions for a supported country (if any)
 */
class ReturnsListOfRelevantSubdivisionsForSupportedCountryIfAny extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/Subdivisions";
	}


	/**
	 * @param string $countryIsoCode ISO 3166-1 code of the country
	 * @param string $languageIsoCode ISO-639-1 code of a language or empty
	 */
	public function __construct(
		protected string $countryIsoCode,
		protected string $languageIsoCode,
	) {
	}


	public function defaultQuery(): array
	{
		return ['countryIsoCode' => $this->countryIsoCode, 'languageIsoCode' => $this->languageIsoCode];
	}
}
