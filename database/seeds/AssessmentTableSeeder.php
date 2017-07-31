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
//                   'user_id' => rand(1,999),
                    'name' => str_random(10) . ',' . str_random(10),
                    'email' => str_random(10) . '@highlands.edu',
//                   'department' => str_random(10),
                    'password' => str_random(10),
//                   'due_date' => '2017-07-20',
//                   'summary' => 'Sed porttitor lectus nibh. Cras ultricies ligula sed magna dictum porta.
//                    Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae;
//                     Donec velit neque, auctor sit amet aliquam vel, ullamcorper sit amet ligula. Donec rutrum
//                      congue leo eget malesuada. Vivamus magna justo, lacinia eget consectetur sed, convallis at
//                       tellus. Donec rutrum congue leo eget malesuada.',
                    'created_at' => date("Y-m-d")
                ]);
                $id =DB::table('assessments')->insertGetId([
                   'period' =>'2017',
                    'slo_id' => rand(1,999),
                    'goal_id' => rand(1,7),
                    'team_id' => rand(1,999),
                    'course' => str_random(4) . rand(1000,9999),
                    'method' => 'Sed porttitor lectus nibh. Cras ultricies ligula sed magna dictum porta.
//                    Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae;
//                     Donec velit neque, auctor sit amet aliquam vel, ullamcorper sit amet ligula. Donec rutrum
//                      congue leo eget malesuada. Vivamus magna justo, lacinia eget consectetur sed, convallis at
//                       tellus. Donec rutrum congue leo eget malesuada.',
                    'measure' => 'Proin eget tortor risus. Cras ultricies ligula sed magna dictum porta. 
                    Donec sollicitudin molestie malesuada. Curabitur arcu erat, accumsan id imperdiet et,
                     porttitor at sem. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices 
                     posuere cubilia Curae; Donec velit neque, auctor sit amet aliquam vel, ullamcorper 
                     sit amet ligula. Praesent sapien massa, convallis a pellentesque nec, egestas non nisi.
                      Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent sapien massa, 
                      convallis a pellentesque nec, egestas non nisi.',


//                   'last_name' => str_random(10),
//                   'email' => str_random(10) . '@highlands.edu',
//                   'department' => str_random(10),
//                   'phone' => rand(2000000000, 9999999999),
//                   'due_date' => '2017-07-20',
//                    'summary' => 'Sed porttitor lectus nibh. Cras ultricies ligula sed magna dictum porta.
//                    Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae;
//                     Donec velit neque, auctor sit amet aliquam vel, ullamcorper sit amet ligula. Donec rutrum
//                      congue leo eget malesuada. Vivamus magna justo, lacinia eget consectetur sed, convallis at
//                       tellus. Donec rutrum congue leo eget malesuada.',
                    'submit_date' => date("Y-m-d"),
                    'created_at' => date("Y-m-d"),
                    'user_id' => $id
                ]);
            }
        }
    }
}
