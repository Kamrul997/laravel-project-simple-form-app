<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\FormData;
use Faker\Factory as Faker;

class TaskSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();
        
        for($i=1; $i<=100; $i++){
            $formData = new FormData;
            $formData -> task_title = $faker->name;
            $formData -> task_description = $faker->name;
            $formData -> task_startDate = $faker->date;
            $formData -> task_deadline = $faker->date;
            $formData -> select_maping = rand(1,3);
            $formData -> select_priority = rand(1,3);
            $formData -> select_user = rand(1,3);
            $formData -> task_remarks = $faker->name;
            $formData -> task_links = $faker->name;
            $formData -> task_file = "imagename" . rand(1,100) . ".jpg";
            $formData->save();
        }
    }
}
