<?php

use Faker\Generator as Faker;

$factory->define(App\Charity::class, function (Faker $faker) {
    return [
        'userName'=>$faker->userName,
        'firstName'=>$faker->firstName,
        'lastName'=>$faker->lastName,
        'email'=>$faker->email,
        'password'=>Hash::make('hello!'),
        'company'=>$faker->company,
        'address'=>$faker->address,
        'bio'=>$faker->text($maxNbChars = 200)  ,
        'imagename'=>$faker->words($nb = 1, $asText = true).'jpg',
        'skill'=>$faker->jobTitle,
        'intrest'=>$faker->jobTitle.' intrest',
        'resume'=>$faker->realText($maxNbChars = 200, $indexSize = 2),
        'mobileNumber'=>$faker->phoneNumber,
        'phoneNumber'=>$faker->phoneNumber,
        'is_complete'=>$faker->boolean,
        'site'=>$faker->domainName,
    ];
});
