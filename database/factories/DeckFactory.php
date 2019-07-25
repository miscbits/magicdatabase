<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Deck;
use Faker\Generator as Faker;

$factory->define(Deck::class, function (Faker $faker) {
    $is_commander = $faker->boolean;
    $is_partner = $faker->boolean && $is_commander;
    return [
        name => 'My Awesome Deck'
        commander => $is_commander ? $faker->name : null;
        partner =>  $is_partner ? $faker->name : null;
        format => $is_commander ? 'commander' : $faker->randomElement(['modern', 'standard', 'legacy'])
        list => "56 Island\n4 Storm Crow"
    ];
});
