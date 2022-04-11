<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UserSeeder::class);
        $this->call(RaceSeeder::class);
        $this->call(DriverSeeder::class);
        $this->call(TeamSeeder::class);
        //$this->call(DriverInTeamSeeder::class);
        //$this->call(FinishesSeeder::class);
    }
}
