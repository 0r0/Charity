<?php

use App\Volunteer;
use Illuminate\Database\Seeder;

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
//        Volunteer::all()
        Volunteer::all()->each(function ($v) use ($projects){
            $v->projects()->attach($projects->random(rand(1,2))->pluck('id')->toArray());
        });

    }
}
