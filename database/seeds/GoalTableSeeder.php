<?php

use Illuminate\Database\Seeder;

class GoalTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($x = 0; $x <= 7; $x++) {
            $id = DB::table('goals')->insertGetId([
//                   'user_id' => rand(1,999),
                'name' =>'Quisque velit nisi, pretium ut lacinia in, elementum id enim.',
//                    'email' => str_random(10) . '@highlands.edu',
//                   'department' => str_random(10),
//                    'password' => str_random(10),
//                   'due_date' => '2017-07-20',
//                   'summary' => 'Sed porttitor lectus nibh. Cras ultricies ligula sed magna dictum porta.
//                    Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae;
//                     Donec velit neque, auctor sit amet aliquam vel, ullamcorper sit amet ligula. Donec rutrum
//                      congue leo eget malesuada. Vivamus magna justo, lacinia eget consectetur sed, convallis at
//                       tellus. Donec rutrum congue leo eget malesuada.',
                'created_at' => date("Y-m-d")
            ]);

        }
    }
}
