<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DriversInTeamsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('drivers_in_teams')->insert([
            'team_id'=>'1',
            'driver_1_id'=>'1',
            'driver_2_id' => '12',
        ]);

        DB::table('drivers_in_teams')->insert([
            'team_id'=>'2',
            'driver_1_id'=>'2',
            'driver_2_id' => '15',
        ]);
    }
}
