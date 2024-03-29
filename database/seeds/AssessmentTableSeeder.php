<?php

use Illuminate\Database\Seeder;

class AssessmentTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */

    public function run()
    {
        $faker = Faker\Factory::create();
        {
            for ($x = 0; $x <= 10; $x++) {
//                $id = DB::table('users')->insertGetId([
//                    'name' => $faker->name,
//                    'email' => $faker->lastName . '@highlands.edu',
//                    'password' => str_random(10),
//                    'created_at' => date("Y-m-d")
//                ]);
                $id =DB::table('assessments')->insertGetId([
                   'period' =>'2017',
                    'slo_id' => rand(33,243),
                    'goal_id' => rand(1,7),
                    'team_id' => rand(201,270),
                    'course' => $faker->word . rand(1000,9999),
                    'method' => $faker->text,
                    'measure' => $faker->text,
                    'submit_date' => date("Y-m-d"),
                    'created_at' => date("Y-m-d"),
                    'user_id' => $x + 1
                ]);
            }
        }
    }
}
