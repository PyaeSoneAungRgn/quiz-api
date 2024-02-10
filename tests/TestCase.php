<?php

namespace PyaeSoneAung\QuizApi\Tests;

use Illuminate\Support\Facades\Config;
use PyaeSoneAung\QuizApi\QuizApiServiceProvider;
use Orchestra\Testbench\TestCase as Orchestra;

class TestCase extends Orchestra
{
    protected function setUp(): void
    {
        parent::setUp();

        Config::set('quiz-api.api_key', 'foo');
    }

    protected function getPackageProviders($app)
    {
        return [
            QuizApiServiceProvider::class,
        ];
    }

    public function getEnvironmentSetUp($app)
    {
    }
}
