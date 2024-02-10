<?php

use PyaeSoneAung\QuizApi\Facades\QuizApi;
use PyaeSoneAung\QuizApiClient\QuizApi as QuizApiClient;
use PyaeSoneAung\QuizApiClient\Resources\QuestionResource;

it('can get QuizApi client', function () {
    expect(app(QuizApiClient::class))->toBeInstanceOf(QuizApiClient::class);
});

it('can get question resource', function () {
    expect(QuizApi::questions())->toBeInstanceOf(QuestionResource::class);
});
