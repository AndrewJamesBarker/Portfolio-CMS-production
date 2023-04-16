<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Type;
use App\Models\Project;
use App\Models\Skill;
use App\Models\Education;
use App\Models\Employment;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        User::truncate();
        Type::truncate();
        Project::truncate();
        Skill::truncate();
        Education::truncate();
        Employment::truncate();
        
        User::factory()->count(2)->create();
        Type::factory()->count(3)->create();
        Project::factory()->count(4)->create();
        Skill::factory()->count(14)->create()->each(function($skill){
            $projects = Project::all()->random(rand(1,2) )->pluck('id');
            $skill->projects()->attach($projects);
        });
        Education::factory()->count(2)->create();
        Employment::factory()->count(3)->create();
            
    }
}
