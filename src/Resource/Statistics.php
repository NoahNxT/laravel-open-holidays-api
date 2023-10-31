<?php

namespace NoahNxT\LaravelOpenHolidayApi\Resource;

use NoahNxT\LaravelOpenHolidayApi\Requests\Statistics\ReturnsStatisticalDataAboutPublicHolidaysForGivenCountry;
use NoahNxT\LaravelOpenHolidayApi\Requests\Statistics\ReturnsStatisticalDataAboutSchoolHolidaysForGivenCountry;
use NoahNxT\LaravelOpenHolidayApi\Resource;
use Saloon\Http\Response;

class Statistics extends Resource
{
	/**
	 * @param string $countryIsoCode ISO 3166-1 code of the country
	 * @param string $subdivisionCode Code of the subdivision or empty
	 */
	public function returnsStatisticalDataAboutPublicHolidaysForGivenCountry(
		string $countryIsoCode,
		string $subdivisionCode,
	): Response
	{
		return $this->connector->send(new ReturnsStatisticalDataAboutPublicHolidaysForGivenCountry($countryIsoCode, $subdivisionCode));
	}


	/**
	 * @param string $countryIsoCode ISO 3166-1 code of the country
	 * @param string $subdivisionCode Code of the subdivision or empty
	 */
	public function returnsStatisticalDataAboutSchoolHolidaysForGivenCountry(
		string $countryIsoCode,
		string $subdivisionCode,
	): Response
	{
		return $this->connector->send(new ReturnsStatisticalDataAboutSchoolHolidaysForGivenCountry($countryIsoCode, $subdivisionCode));
	}
}
