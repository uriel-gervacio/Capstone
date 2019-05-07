<?php

use App\Reading;
use Faker\Generator as Faker;

$factory->define(Reading::class, function (Faker $faker) {
    return [
        'Option' => 'B1',
        'Title' => $faker->sentence(),
        'BibleVerse' => $faker->sentence(),
        'Text' => $faker->paragraph(),
        'Type' => $faker->sentence(),
    ];
});
