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
        $faker = Faker\Factory::create();
        for ($x = 0; $x <= 7; $x++) {
            $id = DB::table('goals')->insertGetId([
//                   'user_id' => rand(1,999),
                'name' =>$faker->sentence(),
                'created_at' => date("Y-m-d")
            ]);

        }
    }
}
