<?php

namespace NoahNxT\LaravelOpenHolidayApi;

use Saloon\Http\Connector;

class Resource
{
    public function __construct(
        protected Connector $connector,
    ) {
    }
}
