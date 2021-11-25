<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Subscription;
use Faker\Generator as Faker;

$factory->define(Subscription::class, function (Faker $faker) {
    return [
        'status' => 1,
        'title' => $faker->words(2, true),
        'price' => $faker->numberBetween($min = 1000, $max = 6000),
        'valid_property' => $faker->unique()->numberBetween($min = 1, $max = 20),
        'agent_role' => 'Lender',
        'description' => $faker->text(200),
        'created_at' => now()
    ];
});
