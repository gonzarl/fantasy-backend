<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RaceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('races')->insert([
            'city'=>'Sakhir Grand Prix',
            'country'=>'Bahrain',
            'date' => '2022-03-20',
            'style'=>'classic',
        ]);

        DB::table('races')->insert([
            'city'=>'Jeddah Grand Prix',
            'country'=>'Saudi Arabia',
            'date' => '2022-03-27',
            'style'=>'street',
        ]);

        DB::table('races')->insert([
            'city'=>'Melbourne Grand Prix',
            'country'=>'Australia',
            'date' => '2022-04-10',
            'style'=>'classic',
            //'grid_result_id'=>'0',
        ]);

        DB::table('races')->insert([
            'city'=>'Emilia Romagna Grand Prix',
            'country'=>'Italy',
            'date' => '2022-04-24',
            'style'=>'classic'
        ]);

        DB::table('races')->insert([
            'city'=>'Miami Grand Prix',
            'country'=>'United States',
            'date' => '2022-05-08',
            'style'=>'classic'
        ]);

        DB::table('races')->insert([
            'city'=>'Barcelona Grand Prix',
            'country'=>'Spain',
            'date' => '2022-05-22',
            'style'=>'classic'
        ]);

        DB::table('races')->insert([
            'city'=>'Monte Carlo Grand Prix',
            'country'=>'Monaco',
            'date' => '2022-05-29',
            'style'=>'street'
        ]);

        DB::table('races')->insert([
            'city'=>'Baku Grand Prix',
            'country'=>'Azerbaiyan',
            'date' => '2022-06-12',
            'style'=>'street'
        ]);

        DB::table('races')->insert([
            'city'=>'Montreal Grand Prix',
            'country'=>'Canada',
            'date' => '2022-06-19',
            'style'=>'classic'
        ]);

        DB::table('races')->insert([
            'city'=>'Silverstone Grand Prix',
            'country'=>'Great Britain',
            'date' => '2022-07-03',
            'style'=>'classic'
        ]);

        DB::table('races')->insert([
            'city'=>'Spielberg Grand Prix',
            'country'=>'Austria',
            'date' => '2022-07-10',
            'style'=>'classic'
        ]);

        DB::table('races')->insert([
            'city'=>'Le Castellet Grand Prix',
            'country'=>'France',
            'date' => '2022-07-24',
            'style'=>'classic'
        ]);

        DB::table('races')->insert([
            'city'=>'Hungaroring Grand Prix',
            'country'=>'Hungary',
            'date' => '2022-07-31',
            'style'=>'classic'
        ]);

        DB::table('races')->insert([
            'city'=>'Spa-Francorchamps Grand Prix',
            'country'=>'Belgium',
            'date' => '2022-08-28',
            'style'=>'classic'
        ]);

        DB::table('races')->insert([
            'city'=>'Zandvoort Grand Prix',
            'country'=>'Netherlands',
            'date' => '2022-09-04',
            'style'=>'classic'
        ]);

        DB::table('races')->insert([
            'city'=>'Monza Grand Prix',
            'country'=>'Italy',
            'date' => '2022-09-11',
            'style'=>'classic'
        ]);

        DB::table('races')->insert([
            'city'=>'Sochi Grand Prix',
            'country'=>'Russia',
            'style'=>'classic',
        ]);

        DB::table('races')->insert([
            'city'=>'Marina Bay Grand Prix',
            'country'=>'Singapur',
            'date' => '2022-10-02',
            'style'=>'street'
        ]);

        DB::table('races')->insert([
            'city'=>'Suzuka Grand Prix',
            'country'=>'Japan',
            'date' => '2022-10-09',
            'style'=>'classic'
        ]);

        DB::table('races')->insert([
            'city'=>'Austin Grand Prix',
            'country'=>'United States',
            'date' => '2022-10-23',
            'style'=>'classic'
        ]);

        DB::table('races')->insert([
            'city'=>'Mexico D.F. Grand Prix',
            'country'=>'Mexico',
            'date' => '2022-10-30',
            'style'=>'classic'
        ]);

        DB::table('races')->insert([
            'city'=>'Interlagos Grand Prix',
            'country'=>'Brasil',
            'date' => '2022-11-13',
            'style'=>'classic'
        ]);

        DB::table('races')->insert([
            'city'=>'Yas Marina Grand Prix',
            'country'=>'Abu Dhabi',
            'date' => '2022-11-20',
            'style'=>'classic'
        ]);
    }
}
