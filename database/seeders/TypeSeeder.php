<?php

namespace Database\Seeders;

use App\Models\Type;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Faker\Generator as Faker;
use Illuminate\Database\Seeder;

class TypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {
        $typeFront = new Type();
        $typeFront->name = "Front-End";
        $typeFront->description = $faker->paragraph();
        $typeFront->icon = "fa-solid fa-display";
        $typeFront->save();

        $typeBack = new Type();
        $typeBack->name = "Back-End";
        $typeBack->description = $faker->paragraph();
        $typeBack->icon = "fa-solid fa-server";
        $typeBack->save();

        $typeFull = new Type();
        $typeFull->name = "Full-Stack";
        $typeFull->description = $faker->paragraph();
        $typeFull->icon = "fa-solid fa-yin-yang";
        $typeFull->save();
        
        $typeDesign = new Type();
        $typeDesign->name = "Design";
        $typeDesign->description = $faker->paragraph();
        $typeDesign->icon = "fa-solid fa-palette";
        $typeDesign->save();
    }
}
