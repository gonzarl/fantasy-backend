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
            'country'=>'Barein',
            'country_code'=>'bh',
            'date' => '2022-03-20',
            'style'=>'Clasico',
            'laps' => '57'
        ]);

        DB::table('races')->insert([
            'city'=>'Jeddah Grand Prix',
            'country'=>'Arabia Saudita',
            'country_code'=>'sa',
            'date' => '2022-03-27',
            'style'=>'Callejero',
            'laps' => '50'
        ]);

        DB::table('races')->insert([
            'city'=>'Melbourne Grand Prix',
            'country'=>'Australia',
            'country_code'=>'au',
            'date' => '2022-04-10',
            'style'=>'Clasico',
            'laps' => '58'
        ]);

        DB::table('races')->insert([
            'city'=>'Emilia Romagna Grand Prix',
            'country'=>'Italia',
            'country_code'=>'it',
            'date' => '2022-04-24',
            'style'=>'Clasico',
            'laps' => '63'
        ]);

        DB::table('races')->insert([
            'city'=>'Miami Grand Prix',
            'country'=>'Estados Unidos',
            'country_code'=>'us',
            'date' => '2022-05-08',
            'style'=>'Clasico',
            'laps' => '57'
        ]);

        DB::table('races')->insert([
            'city'=>'Barcelona Grand Prix',
            'country'=>'España',
            'country_code'=>'es',
            'date' => '2022-05-22',
            'style'=>'Clasico',
            'laps' => '66'
        ]);

        DB::table('races')->insert([
            'city'=>'Monte Carlo Grand Prix',
            'country'=>'Monaco',
            'country_code'=>'mc',
            'date' => '2022-05-29',
            'style'=>'Callejero',
            'laps' => '78'
        ]);

        DB::table('races')->insert([
            'city'=>'Baku Grand Prix',
            'country'=>'Azerbaiyan',
            'country_code'=>'az',
            'date' => '2022-06-12',
            'style'=>'Callejero',
            'laps' => '51'
        ]);

        DB::table('races')->insert([
            'city'=>'Montreal Grand Prix',
            'country'=>'Canada',
            'country_code'=>'ca',
            'date' => '2022-06-19',
            'style'=>'Clasico',
            'laps' => '70'
        ]);

        DB::table('races')->insert([
            'city'=>'Silverstone Grand Prix',
            'country'=>'Gran Bretaña',
            'country_code'=>'gb',
            'date' => '2022-07-03',
            'style'=>'Clasico',
            'laps' => '52'
        ]);

        DB::table('races')->insert([
            'city'=>'Spielberg Grand Prix',
            'country'=>'Austria',
            'country_code'=>'at',
            'date' => '2022-07-10',
            'style'=>'Clasico',
            'laps' => '71'
        ]);

        DB::table('races')->insert([
            'city'=>'Le Castellet Grand Prix',
            'country'=>'Francia',
            'country_code'=>'fr',
            'date' => '2022-07-24',
            'style'=>'Clasico',
            'laps' => '53'
        ]);

        DB::table('races')->insert([
            'city'=>'Hungaroring Grand Prix',
            'country'=>'Hungria',
            'country_code'=>'hu',
            'date' => '2022-07-31',
            'style'=>'Clasico',
            'laps' => '70'
        ]);

        DB::table('races')->insert([
            'city'=>'Spa-Francorchamps Grand Prix',
            'country'=>'Belgica',
            'country_code'=>'be',
            'date' => '2022-08-28',
            'style'=>'Clasico',
            'laps' => '44'
        ]);

        DB::table('races')->insert([
            'city'=>'Zandvoort Grand Prix',
            'country'=>'Paises Bajos',
            'country_code'=>'nl',
            'date' => '2022-09-04',
            'style'=>'Clasico',
            'laps' => '72'
        ]);

        DB::table('races')->insert([
            'city'=>'Monza Grand Prix',
            'country'=>'Italia',
            'country_code'=>'it',
            'date' => '2022-09-11',
            'style'=>'Clasico',
            'laps' => '53'
        ]);

        DB::table('races')->insert([
            'city'=>'Sochi Grand Prix',
            'country'=>'Rusia',
            'country_code'=>'ru',
            'style'=>'Clasico',
            'laps' => '53'
        ]);

        DB::table('races')->insert([
            'city'=>'Marina Bay Grand Prix',
            'country'=>'Singapur',
            'country_code'=>'sg',
            'date' => '2022-10-02',
            'style'=>'Callejero',
            'laps' => '61'
        ]);

        DB::table('races')->insert([
            'city'=>'Suzuka Grand Prix',
            'country'=>'Japon',
            'country_code'=>'jp',
            'date' => '2022-10-09',
            'style'=>'Clasico',
            'laps' => '53'
        ]);

        DB::table('races')->insert([
            'city'=>'Austin Grand Prix',
            'country'=>'Estados Unidos',
            'country_code'=>'us',
            'date' => '2022-10-23',
            'style'=>'Clasico',
            'laps' => '56'
        ]);

        DB::table('races')->insert([
            'city'=>'Mexico D.F. Grand Prix',
            'country'=>'Mexico',
            'country_code'=>'mx',
            'date' => '2022-10-30',
            'style'=>'Clasico',
            'laps' => '71'
        ]);

        DB::table('races')->insert([
            'city'=>'Interlagos Grand Prix',
            'country'=>'Brasil',
            'country_code'=>'br',
            'date' => '2022-11-13',
            'style'=>'Clasico',
            'laps' => '71'
        ]);

        DB::table('races')->insert([
            'city'=>'Abu Dhabi Grand Prix',
            'country'=>'Emiratos Arabes Unidos',
            'country_code'=>'ae',
            'date' => '2022-11-20',
            'style'=>'Clasico',
            'laps' => '58'
        ]);
    }
}
