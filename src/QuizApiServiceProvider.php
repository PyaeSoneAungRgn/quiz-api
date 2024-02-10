<?php

namespace PyaeSoneAung\QuizApi;

use Illuminate\Support\ServiceProvider;
use PyaeSoneAung\QuizApiClient\QuizApi;

class QuizApiServiceProvider extends ServiceProvider
{
    public function boot(): void
    {
        $this->mergeConfigFrom(
            __DIR__ . '/../config/quiz-api.php',
            'quiz-api'
        );

        $this->app->singleton(QuizApi::class, function () {
            return new QuizApi(config('quiz-api.api_key'));
        });
    }
}
