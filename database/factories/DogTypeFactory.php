<?php

use Faker\Generator as Faker;
use App\DogType;

$factory->define(DogType::class, function (Faker $faker) {
    return [
        'type' => $faker->sentence(1),
        
    ];
});
