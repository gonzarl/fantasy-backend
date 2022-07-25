<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TeamSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('teams')->insert([
            'name'=>'The Best Team',
            'budget'=>'100000',
            'points' => '72',
            'user_id'=>'1'
        ]);

        DB::table('teams')->insert([
            'name'=>'The Fastest Team',
            'budget'=>'0',
            'points' => '39',
            'user_id'=>'2'
        ]);

    }
}
