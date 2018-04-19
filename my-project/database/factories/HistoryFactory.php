<?php

use Faker\Generator as Faker;

$factory->define(App\History::class, function (Faker $faker) {
    return [
        'title' => $faker->sentence,
        'details' =>$faker->paragraph(40),
        'added_by' => $faker->sentence(1),
    ];
});
