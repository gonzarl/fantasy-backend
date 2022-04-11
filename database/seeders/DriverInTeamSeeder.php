<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DriverInTeamSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('driver_in_team')->insert([
            'team_id'=>'1',
            'driver_id_1'=>'1',
            'driver_id_2' => '12',
        ]);

        DB::table('driver_in_team')->insert([
            'team_id'=>'2',
            'driver_id_1'=>'2',
            'driver_id_2' => '15',
        ]);
    }
}
