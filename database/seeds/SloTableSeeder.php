<?php

use Illuminate\Database\Seeder;

class SloTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($x = 0; $x <= 7; $x++) {
            $id = DB::table('slos')->insertGetId([
                'name' => 'Sed porttitor lectus nibh.',
                'team_id' => rand(1, 999),
                'created_at' => date("Y-m-d")
            ]);
        }
    }
}
