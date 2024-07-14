<?php

namespace Database\Seeders;

use App\Models\Project;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Faker\Generator as Faker;
use Illuminate\Database\Seeder;

class ProjectsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {
        for ($i=0; $i < 10 ; $i++) {

            $project = new Project();
            $project->title = $faker->company();
            $project->description = $faker->paragraph();
            $project->img = "https://picsum.photos/id/".rand(1, 600)."/200/300";
            $project->type_id = $faker->numberBetween(1, 4);
            $project->save();
        }
    }
}
