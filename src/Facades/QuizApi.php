<?php

namespace PyaeSoneAung\QuizApi\Facades;

use Illuminate\Support\Facades\Facade;

class QuizApi extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return \PyaeSoneAung\QuizApiClient\QuizApi::class;
    }
}
