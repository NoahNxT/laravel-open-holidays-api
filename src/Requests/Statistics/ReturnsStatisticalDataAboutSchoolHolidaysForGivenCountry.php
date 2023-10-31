<?php

namespace NoahNxT\LaravelOpenHolidayApi\Requests\Statistics;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Returns statistical data about school holidays for a given country
 */
class ReturnsStatisticalDataAboutSchoolHolidaysForGivenCountry extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/Statistics/SchoolHolidays";
	}


	/**
	 * @param string $countryIsoCode ISO 3166-1 code of the country
	 * @param string $subdivisionCode Code of the subdivision or empty
	 */
	public function __construct(
		protected string $countryIsoCode,
		protected string $subdivisionCode,
	) {
	}


	public function defaultQuery(): array
	{
		return ['countryIsoCode' => $this->countryIsoCode, 'subdivisionCode' => $this->subdivisionCode];
	}
}
