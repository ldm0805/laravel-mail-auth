<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Faker\Generator as Faker;
use Illuminate\Support\Str;
use App\Models\Project;
class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for($i=0; $i<10; $i++){
            $newProj = new Project();
            $newProj->title = $faker->sentence(4);
            $newProj->content = $faker->text(500);
            $newProj->slug = Str::slug($newProj->title, '-');
            $newProj->date_project = $faker->dateTime();
            $newProj->cover_image = $faker->imageUrl(600, 300, 'animals', true, 'dogs', true, 'jpg');
            $newProj->save();
        }
    }
}