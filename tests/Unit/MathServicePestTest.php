<?php

use App\Services\MathService;

it('calculates the square of a number', function ($number, $expected) {
    expect(MathService::squareNumber($number))->toBe($expected);
})->with([
    [2, 4],
    [-3, 9],
    [0, 0],
    [999, 999999],
]);
