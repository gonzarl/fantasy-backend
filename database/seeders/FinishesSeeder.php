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
            'driver_id-1'=>'1',
            'driver_id-2'=>'2',
            'driver_id-3'=>'6',
            'driver_id-4'=>'5',
            'driver_id-5'=>'9',
            'driver_id-6'=>'11',
            'driver_id-7'=>'7',
            'driver_id-8'=>'16',
            'driver_id-9'=>'8',
            'driver_id-10'=>'12',
            'driver_id-11'=>'10',
            'driver_id-12'=>'17',
            'driver_id-13'=>'19',
            'driver_id-14'=>'14',
            'driver_id-15'=>'13',
            'driver_id-16'=>'20',
            'driver_id-17'=>'4',
            'driver_id-18'=>'3',
            'driver_id-19'=>'15',
            'driver_id-20'=>'18',
        ]);

        DB::table('finishes')->insert([
            'race_id'=>'1',
            'driver_id-1'=>'3',
            'driver_id-2'=>'1',
            'driver_id-3'=>'2',
            'driver_id-4'=>'4',
            'driver_id-5'=>'5',
            'driver_id-6'=>'7',
            'driver_id-7'=>'13',
            'driver_id-8'=>'15',
            'driver_id-9'=>'9',
            'driver_id-10'=>'6',
            'driver_id-11'=>'12',
            'driver_id-12'=>'17',
            'driver_id-13'=>'19',
            'driver_id-14'=>'11',
            'driver_id-15'=>'8',
            'driver_id-16'=>'14',
            'driver_id-17'=>'20',
            'driver_id-18'=>'16',
            'driver_id-19'=>'10',
            'driver_id-20'=>'18',
        ]);
    }
}
