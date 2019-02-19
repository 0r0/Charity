<?php

use Illuminate\Database\Seeder;
use App\Volunteer;

class CharityTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Charity::class,50)->create();

        $projects=factory(App\Project::class,50)->create();
            App\Charity::all()->each(function($c) use ($projects){
                $c->projects()->attach($projects->random(rand(1,3))->pluck('id')->toArray());
        });

    }
}
