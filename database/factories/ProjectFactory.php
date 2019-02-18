<?php

use Faker\Generator as Faker;

$factory->define(App\Project::class, function (Faker $faker) {
    return [
        'title' => $faker->title,
        'picture' => $faker->words($nb = 1, $asText = true) . 'jpg',
        'supporter' => $faker->company,
        'summery' => $faker->text($maxNbChars = 200),
        'description' => $faker->realText(100),
        'report' => $faker->realText(300),
    ];
});
