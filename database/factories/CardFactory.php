<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Card;
use Faker\Generator as Faker;

$factory->define(Card::class, function (Faker $faker) {
    return [
        name => $faker->name,
        quantity => $faker->numberBetween(1, 9),
    ];
});
