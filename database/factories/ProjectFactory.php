<?php

//use Faker\Generator as Faker;
use Faker\Factory;
$faker=Factory::create('FA_IR');
$factory->define(App\Project::class, function ()use ($faker){
    return [
        'title' => $faker->name,
        'picture' => $faker->words($nb = 1, $asText = true) . 'jpg',
        'supporter' => $faker->company,
        'summery' => $faker->text($maxNbChars = 200),
        'description' => $faker->text(100),
        'report' => $faker->text(300),
        'money' =>$faker->numberBetween($min = 100000, $max = 9000000).'تومان ',
        'runDate' =>$faker->date()
    ];
});
