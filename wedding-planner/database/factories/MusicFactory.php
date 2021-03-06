<?php

use App\Music;
use Faker\Generator as Faker;

use Faker\Provider\Youtube;
$factory->define(Music::class, function (Faker $faker) {
    
    $faker->addProvider(new Youtube($faker));
    $this->faker = $faker;
    return [
        'songTitle' => $faker->lexify('???????????????????????'),
        'type' => $faker->lexify('???????????????????????'),
        'url' => $faker->youtubeUri(),
    ];
});
