<?php

use Faker\Generator as Faker;

$factory->define(App\articel::class, function (Faker $faker) {
    return [
      'title'=>$faker->sentence($nbWords = 6, $variableNbWords = true),
      'name'=>$faker->name,
      'authorname'=>$faker->name,
      'body'=>$faker->sentence($nbWords = 6, $variableNbWords = true),
      'publish'=>$faker->sentence($nbWords = 6, $variableNbWords = true),
    ];
});
