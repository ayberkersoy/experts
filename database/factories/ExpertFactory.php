<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Expert;
use Faker\Generator as Faker;

$factory->define(Expert::class, function (Faker $faker) {
    return [
        'expertise_id' => rand(1,5),
        'name' => $faker->firstName,
        'surname' => $faker->lastName,
        'email' => $faker->unique()->safeEmail,
        'description' => $faker->text
    ];
});
