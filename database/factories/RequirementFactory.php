<?php

use App\Requirement;
//use Faker\Generator as Faker;
use Faker\Factory;
$faker=Factory::create('FA_IR');
$factory->define(Requirement::class, function() use($faker) {
    return [
        'project_id'=>random_int(1,30),
        'skill'=>$faker->jobTitle,
        'date'=>$faker->date(),
        'place'=>$faker->city,
        'bill_kind'=>random_int(0,1),
        'description'=>$faker->text(),
    ];
});
