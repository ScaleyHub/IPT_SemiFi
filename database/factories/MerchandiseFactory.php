<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Merchandise;
use Faker\Generator as Faker;

$factory->define(Merchandise::class, function (Faker $faker) {
    return [
        'name' => $faker-> word,
        'description' => $faker -> word,
        'quantity' => rand(10, 1000),
        'price' => rand(250, 3000),
    ];
});
