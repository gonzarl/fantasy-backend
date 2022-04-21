<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FinishesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('finishes')->insert([
            'race_id'=>'1',
            'driver_1_id'=>'1',
            'driver_2_id'=>'2',
            'driver_3_id'=>'6',
            'driver_4_id'=>'5',
            'driver_5_id'=>'9',
            'driver_6_id'=>'11',
            'driver_7_id'=>'7',
            'driver_8_id'=>'16',
            'driver_9_id'=>'8',
            'driver_10_id'=>'12',
        ]);

        DB::table('finishes')->insert([
            'race_id'=>'2',
            'driver_1_id'=>'3',
            'driver_2_id'=>'1',
            'driver_3_id'=>'2',
            'driver_4_id'=>'4',
            'driver_5_id'=>'5',
            'driver_6_id'=>'7',
            'driver_7_id'=>'13',
            'driver_8_id'=>'15',
            'driver_9_id'=>'9',
            'driver_10_id'=>'6',
        ]);

        DB::table('finishes')->insert([
            'race_id'=>'3',
            'driver_1_id'=>'1',
            'driver_2_id'=>'4',
            'driver_3_id'=>'5',
            'driver_4_id'=>'6',
            'driver_5_id'=>'13',
            'driver_6_id'=>'14',
            'driver_7_id'=>'7',
            'driver_8_id'=>'11',
            'driver_9_id'=>'15',
            'driver_10_id'=>'19',
        ]);
    }
}
