<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DriverSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //DESPUES CALCULAR MEJOR EL VALOR DE CADA PILOTO
        DB::table('drivers')->insert([
            'name'=>'Charles Leclerc',
            'age'=>'24',
            'nationality' => 'Monegasque',
            'points'=>'45',
            'scuderia'=>'Ferrari',
            'value'=>'1000000'
        ]);

        DB::table('drivers')->insert([
            'name'=>'Carlos Sainz',
            'age'=>'27',
            'nationality' => 'Spanish',
            'points'=>'33',
            'scuderia'=>'Ferrari',
            'value'=>'800000'
        ]);

        DB::table('drivers')->insert([
            'name'=>'Max Verstappen',
            'age'=>'24',
            'nationality' => 'Dutch',
            'points'=>'25',
            'scuderia'=>'Red Bull',
            'value'=>'1000000'
        ]);

        DB::table('drivers')->insert([
            'name'=>'Sergio Perez',
            'age'=>'31',
            'nationality' => 'Mexican',
            'points'=>'12',
            'scuderia'=>'Red Bull',
            'value'=>'500000'
        ]);

        DB::table('drivers')->insert([
            'name'=>'George Rusell',
            'age'=>'23',
            'nationality' => 'English',
            'points'=>'22',
            'scuderia'=>'Mercedes',
            'value'=>'1000000'
        ]);

        DB::table('drivers')->insert([
            'name'=>'Lewis Hamilton',
            'age'=>'37',
            'nationality' => 'English',
            'points'=>'16',
            'scuderia'=>'Mercedes',
            'value'=>'1500000'
        ]);

        DB::table('drivers')->insert([
            'name'=>'Esteban Ocon',
            'age'=>'25',
            'nationality' => 'French',
            'points'=>'14',
            'scuderia'=>'Alpine',
            'value'=>'500000'
        ]);

        DB::table('drivers')->insert([
            'name'=>'Fernando Alonso',
            'age'=>'40',
            'nationality' => 'Spanish',
            'points'=>'2',
            'scuderia'=>'Alpine',
            'value'=>'800000'
        ]);

        DB::table('drivers')->insert([
            'name'=>'Kevin Magnussen',
            'age'=>'29',
            'nationality' => 'Danish',
            'points'=>'12',
            'scuderia'=>'Haas',
            'value'=>'500000'
        ]);

        DB::table('drivers')->insert([
            'name'=>'Mick Schumacher',
            'age'=>'22',
            'nationality' => 'German',
            'points'=>'0',
            'scuderia'=>'Haas',
            'value'=>'200000'
        ]);

        DB::table('drivers')->insert([
            'name'=>'Valtteri Bottas',
            'age'=>'32',
            'nationality' => 'Finnish',
            'points'=>'8',
            'scuderia'=>'Alfa Romeo',
            'value'=>'800000'
        ]);

        DB::table('drivers')->insert([
            'name'=>'Guanyu Zhou',
            'age'=>'22',
            'nationality' => 'Chinese',
            'points'=>'1',
            'scuderia'=>'Alfa Romeo',
            'value'=>'500000'
        ]);

        DB::table('drivers')->insert([
            'name'=>'Lando Norris',
            'age'=>'22',
            'nationality' => 'English',
            'points'=>'6',
            'scuderia'=>'McLaren',
            'value'=>'800000'
        ]);

        DB::table('drivers')->insert([
            'name'=>'Daniel Ricciardo',
            'age'=>'32',
            'nationality' => 'Australian',
            'points'=>'0',
            'scuderia'=>'McLaren',
            'value'=>'800000'
        ]);

        DB::table('drivers')->insert([
            'name'=>'Pierre Gasly',
            'age'=>'25',
            'nationality' => 'French',
            'points'=>'4',
            'scuderia'=>'AlphaTauri',
            'value'=>'800000'
        ]);

        DB::table('drivers')->insert([
            'name'=>'Yuki Tsunoda',
            'age'=>'21',
            'nationality' => 'Japanese',
            'points'=>'4',
            'scuderia'=>'AlphaTauri',
            'value'=>'500000'
        ]);

        DB::table('drivers')->insert([
            'name'=>'Lance Stroll',
            'age'=>'23',
            'nationality' => 'Canadian',
            'points'=>'0',
            'scuderia'=>'Aston Martin',
            'value'=>'500000'
        ]);

        DB::table('drivers')->insert([
            'name'=>'Sebastian Vettel',
            'age'=>'34',
            'nationality' => 'German',
            'points'=>'0',
            'scuderia'=>'Aston Martin',
            'value'=>'800000'
        ]);

        DB::table('drivers')->insert([
            'name'=>'Alexander Albon',
            'age'=>'25',
            'nationality' => 'Thai',
            'points'=>'0',
            'scuderia'=>'Williams',
            'value'=>'500000'
        ]);

        DB::table('drivers')->insert([
            'name'=>'Nicholas Latifi',
            'age'=>'26',
            'nationality' => 'Canadian',
            'points'=>'0',
            'scuderia'=>'Williams',
            'value'=>'500000'
        ]);
    }
}
