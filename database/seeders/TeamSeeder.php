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
        //budget se calculan solos
        //points se tendria que actualizar solo en base al resultado de los pilotos
        DB::table('teams')->insert([
            'name'=>'The Best Team',
            'budget'=>'100',
            'points' => '0',
            'user_id'=>'1'
        ]);

        DB::table('teams')->insert([
            'name'=>'The Fastest Team',
            'budget'=>'200',
            'points' => '0',
            'user_id'=>'2'
        ]);

    }
}
