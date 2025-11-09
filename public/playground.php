<?php

use Illuminate\Support\Collection;

require __DIR__ . '/../vendor/autoload.php';

$numbers = new Collection([
    1,
    2,
    3,
    4,
    5,
    6,
    7,
    8,
    9,
    10
]);

if ($numbers->contains(10)) {
    var_dump("it contains 10");
} else {
    var_dump("it doesn't contain 10");
}

$fiveOrLess = $numbers->filter(function ($number) {
    return $number <= 5;
});

var_dump($fiveOrLess);
