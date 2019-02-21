<?php

use App\Volunteer;
use Illuminate\Database\Seeder;
use Faker\Factory;

class VolunteerTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Volunteer::class,50)->create();
        $projects=App\Project::all();
        Volunteer::all()->each(function ($v) use ($projects){
            $faker=Factory::create('FA_IR');
            $v->projects()->attach($projects->random(rand(1,2))->pluck('id')->toArray(),['situation' => random_int(-1,1),'skill'=>$faker->jobTitle]);
        });

    }
}
