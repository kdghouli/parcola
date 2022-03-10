<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Agence;
use Faker\Generator as Faker;

$factory->define(Agence::class, function (Faker $faker) {
    return [
        'nom'=>$faker->randomElement(['Marrakech', 'Beni Mellal', 'Essaouira', 'Casablanca', 'Fes']),
        'site'=>$faker->word(),
        'code'=>$faker->randomDigit(),



    ];
});
