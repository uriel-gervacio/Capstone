<?php

use App\Wedding;
use Faker\Generator as Faker;

$factory->define(Wedding::class, function (Faker $faker) {
    return [
        'brideFirstName' => $this->faker->firstNameFemale,
        'brideLastName' => $this->faker->lastName,
        'groomFirstName' => $this->faker->firstNameMale,
        'groomLastName' => $this->faker->lastName,
        'brideAddress' => $this->faker->streetAddress,
        'groomAddress' => $this->faker->streetAddress,
        'brideCity' => $this->faker->city,
        'groomCity' => $this->faker->city,
        'brideState' => $this->faker->stateAbbr,
        'groomState' => $this->faker->stateAbbr,
        //'brideZipCode' => $this->faker->postcode,
        'brideZipCode' => $this->faker->randomNumber(5, true),
        //'groomZipCode' => $this->faker->postcode,
        'groomZipCode' => $this->faker->randomNumber(5, true),
        'brideEmail' => $this->faker->unique()->safeEmail,
        'groomEmail' => $this->faker->unique()->safeEmail,
        //'bridePhoneNumber' => $this->faker->tollFreePhoneNumber,
        'bridePhoneNumber' => '5678094217',
        //'groomPhoneNumber' => $this->faker->tollFreePhoneNumber,
        'groomPhoneNumber' => '6089123636',
        'weddingDate' => $this->faker->date($format = 'm/d/Y', $max = 'now'),
        'weddingTime' => $this->faker->time($format = 'H:i:s', $max = 'now'),
        'rehearsalDate' => $this->faker->date($format = 'm/d/Y', $max = 'now'),
        'rehearsalTime' => $this->faker->time($format = 'H:i:s', $max = 'now')
    ];
});
