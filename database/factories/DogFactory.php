<?php

use Faker\Generator as Faker;
use App\Dog;
use App\DogType;

$factory->define(Dog::class, function (Faker $faker) {
    $typeCount = DogType::all()->count();
    return [
        'name' => $faker->sentence(5),
        'type' => $faker->numberBetween(1,$typeCount),
        'age' =>  $faker->randomDigit(),
        'color' => $faker->colorName,
        
    ];
});
