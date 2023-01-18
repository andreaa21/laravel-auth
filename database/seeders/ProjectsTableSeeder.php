<?php

namespace Database\Seeders;

use App\Models\Project;
use Faker\Generator as Faker;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;


class ProjectsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i = 0; $i < 10; $i++) {
            $new_project = new Project();
            $new_project->title = $faker->word();
            $new_project->slug = Project::generateSlug($new_project->title);
            $new_project->client_name = $faker->name();
            $new_project->summary = $faker->text();
            $new_project->cover_image = 'https://i1.wp.com/potafiori.com/wp-content/uploads/2020/04/placeholder.png?ssl=1';
            dump($new_project);
        }
    }
}
