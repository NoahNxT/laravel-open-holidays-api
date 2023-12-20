<?php

namespace NoahNxT\LaravelOpenHolidaysApi\Tests;

use Illuminate\Database\Eloquent\Factories\Factory;
use NoahNxT\LaravelOpenHolidaysApi\LaravelOpenHolidaysApiServiceProvider;
use Orchestra\Testbench\TestCase as Orchestra;

class TestCase extends Orchestra
{
    protected function setUp(): void
    {
        parent::setUp();

        Factory::guessFactoryNamesUsing(
            fn (string $modelName) => 'NoahNxT\\LaravelOpenHolidayApi\\Database\\Factories\\'.class_basename($modelName).'Factory'
        );
    }

    protected function getPackageProviders($app)
    {
        return [
            LaravelOpenHolidaysApiServiceProvider::class,
        ];
    }

    public function getEnvironmentSetUp($app)
    {
        config()->set('database.default', 'testing');
    }
}
