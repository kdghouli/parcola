<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Vhl;
use Faker\Generator as Faker;

$factory->define(Vhl::class, function (Faker $faker) {
    return [
        'matricule'=>$faker->regexify('[0-9]{5}-[A-Z]{1}-[0-7]{2}'),
        'marque'=>$faker->word(),
        'type'=>$faker->word(),
        'date_mc'=>$faker->date(),
        'puissance'=>$faker->numerify('##'),
        'chassis'=>$faker->word(),
        'equipement'=>$faker->word(),

        //$faker->randomElements(['a', 'b', 'c', 'd', 'e'])

    ];
});
