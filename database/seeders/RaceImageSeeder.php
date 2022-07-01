<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RaceImageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('race_images')->insert([
            'path'=>'https://res.cloudinary.com/drbdzaro6/image/upload/v1653435122/Races/Baku_stma86.png',
            'service_id'=>'Races/Baku_stma86.png',
            'race_id' => '8',
        ]);
    }
}
