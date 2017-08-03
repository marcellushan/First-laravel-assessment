<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(AssessmentTableSeeder::class);
        $this->call(GoalTableSeeder::class);
        $this->call(SloTableSeeder::class);

    }
}
