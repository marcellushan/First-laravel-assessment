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
        {
            for ($x = 0; $x <= 10; $x++) {
                $id = DB::table('users')->insertGetId([
                    'name' => str_random(10) . ',' . str_random(10),
                    'email' => str_random(10) . '@highlands.edu',
                    'password' => str_random(10),
                    'created_at' => date("Y-m-d")
                ]);
                $id =DB::table('assessments')->insertGetId([
                   'period' =>'2017',
                    'slo_id' => rand(33,243),
                    'goal_id' => rand(1,7),
                    'team_id' => rand(201,270),
                    'course' => str_random(4) . rand(1000,9999),
                    'method' => 'Sed porttitor lectus nibh. Cras ultricies ligula sed magna dictum porta.',
                    'measure' => 'Proin eget tortor risus. Cras ultricies ligula sed magna dictum porta.',
                    'submit_date' => date("Y-m-d"),
                    'created_at' => date("Y-m-d"),
                    'user_id' => $id
                ]);
            }
        }
    }
}
