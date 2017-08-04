<?php

use Illuminate\Database\Seeder;

class TeamTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($x = 0; $x <= 7; $x++) {
            $id = DB::table('teams')->insertGetId([
                'name' =>str_random(10),
                'mission' =>'Quisque velit nisi, pretium ut lacinia in, elementum id enim.',
                'created_at' => date("Y-m-d")
            ]);

        }
    }
}
