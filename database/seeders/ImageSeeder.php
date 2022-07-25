<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ImageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('images')->insert([
            'path'=>'https://res.cloudinary.com/drbdzaro6/image/upload/v1651706148/Drivers/Leclerc_xlirft.png',
            'service_id'=>'Drivers/Leclerc_xlirft.png',
            'driver_id' => '1',
        ]);

        DB::table('images')->insert([
            'path'=>'https://res.cloudinary.com/drbdzaro6/image/upload/v1651706158/Drivers/Sainz_rg0hal.png',
            'service_id'=>'Drivers/Sainz_rg0hal.png',
            'driver_id' => '2',
        ]);

        DB::table('images')->insert([
            'path'=>'https://res.cloudinary.com/drbdzaro6/image/upload/v1651706167/Drivers/Vestappen_rldzg1.png',
            'service_id'=>'Drivers/Vestappen_rldzg1.png',
            'driver_id' => '3',
        ]);
    }
}
