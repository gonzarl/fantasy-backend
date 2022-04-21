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
        DB::table('drivers')->insert([
            'name'=>'Charles Leclerc',
            'age'=>'24',
            'nationality' => 'Monegasque',
            'points'=>'71',
            'scuderia'=>'Ferrari',
            'number'=>'16',
            'value'=>'800000',
            'image' => 'https://www.formula1.com/content/dam/fom-website/drivers/C/CHALEC01_Charles_Leclerc/chalec01.png.transform/2col/image.png'
        ]);

        DB::table('drivers')->insert([
            'name'=>'Carlos Sainz',
            'age'=>'27',
            'nationality' => 'Spanish',
            'points'=>'33',
            'scuderia'=>'Ferrari',
            'number'=>'55',
            'value'=>'600000',
            'image'=>'https://www.formula1.com/content/dam/fom-website/drivers/C/CARSAI01_Carlos_Sainz/carsai01.png.transform/2col/image.png'
        ]);

        DB::table('drivers')->insert([
            'name'=>'Max Verstappen',
            'age'=>'24',
            'nationality' => 'Dutch',
            'points'=>'25',
            'scuderia'=>'Red Bull',
            'number'=>'1',
            'value'=>'800000',
            'image'=> 'https://www.formula1.com/content/dam/fom-website/drivers/M/MAXVER01_Max_Verstappen/maxver01.png.transform/2col/image.png'
        ]);

        DB::table('drivers')->insert([
            'name'=>'Sergio Perez',
            'age'=>'31',
            'nationality' => 'Mexican',
            'points'=>'30',
            'scuderia'=>'Red Bull',
            'number'=>'11',
            'value'=>'600000',
            'image'=>'https://www.formula1.com/content/dam/fom-website/drivers/S/SERPER01_Sergio_Perez/serper01.png.transform/2col/image.png'
        ]);

        DB::table('drivers')->insert([
            'name'=>'George Rusell',
            'age'=>'23',
            'nationality' => 'English',
            'points'=>'37',
            'scuderia'=>'Mercedes',
            'number'=>'63',
            'value'=>'600000',
            'image'=>'https://www.formula1.com/content/dam/fom-website/drivers/G/GEORUS01_George_Russell/georus01.png.transform/2col/image.png'
        ]);

        DB::table('drivers')->insert([
            'name'=>'Lewis Hamilton',
            'age'=>'37',
            'nationality' => 'English',
            'points'=>'28',
            'scuderia'=>'Mercedes',
            'number'=>'44',
            'value'=>'800000',
            'image' => 'https://www.formula1.com/content/dam/fom-website/drivers/L/LEWHAM01_Lewis_Hamilton/lewham01.png.transform/2col/image.png'
        ]);

        DB::table('drivers')->insert([
            'name'=>'Esteban Ocon',
            'age'=>'25',
            'nationality' => 'French',
            'points'=>'20',
            'scuderia'=>'Alpine',
            'number'=>'31',
            'value'=>'500000',
            'image'=>'https://www.formula1.com/content/dam/fom-website/drivers/E/ESTOCO01_Esteban_Ocon/estoco01.png.transform/2col/image.png'
        ]);

        DB::table('drivers')->insert([
            'name'=>'Fernando Alonso',
            'age'=>'40',
            'nationality' => 'Spanish',
            'points'=>'2',
            'scuderia'=>'Alpine',
            'number'=>'14',
            'value'=>'500000',
            'image'=>'https://www.formula1.com/content/dam/fom-website/drivers/F/FERALO01_Fernando_Alonso/feralo01.png.transform/2col/image.png'
        ]);

        DB::table('drivers')->insert([
            'name'=>'Kevin Magnussen',
            'age'=>'29',
            'nationality' => 'Danish',
            'points'=>'12',
            'scuderia'=>'Haas',
            'number'=>'20',
            'value'=>'300000',
            'image'=>'https://www.formula1.com/content/dam/fom-website/drivers/K/KEVMAG01_Kevin_Magnussen/kevmag01.png.transform/2col/image.png'
        ]);

        DB::table('drivers')->insert([
            'name'=>'Mick Schumacher',
            'age'=>'22',
            'nationality' => 'German',
            'points'=>'0',
            'scuderia'=>'Haas',
            'number'=>'47',
            'value'=>'200000',
            'image'=>'https://www.formula1.com/content/dam/fom-website/drivers/M/MICSCH02_Mick_Schumacher/micsch02.png.transform/2col/image.png'
        ]);

        DB::table('drivers')->insert([
            'name'=>'Valtteri Bottas',
            'age'=>'32',
            'nationality' => 'Finnish',
            'points'=>'12',
            'scuderia'=>'Alfa Romeo',
            'number'=>'77',
            'value'=>'400000',
            'image'=>'https://www.formula1.com/content/dam/fom-website/drivers/V/VALBOT01_Valtteri_Bottas/valbot01.png.transform/2col/image.png'
        ]);

        DB::table('drivers')->insert([
            'name'=>'Guanyu Zhou',
            'age'=>'22',
            'nationality' => 'Chinese',
            'points'=>'1',
            'scuderia'=>'Alfa Romeo',
            'number'=>'24',
            'value'=>'100000',
            'image'=>'https://www.formula1.com/content/dam/fom-website/drivers/G/GUAZHO01_Guanyu_Zhou/guazho01.png.transform/2col/image.png'
        ]);

        DB::table('drivers')->insert([
            'name'=>'Lando Norris',
            'age'=>'22',
            'nationality' => 'English',
            'points'=>'16',
            'scuderia'=>'McLaren',
            'number'=>'4',
            'value'=>'500000',
            'image'=>'https://www.formula1.com/content/dam/fom-website/drivers/L/LANNOR01_Lando_Norris/lannor01.png.transform/2col/image.png'
        ]);

        DB::table('drivers')->insert([
            'name'=>'Daniel Ricciardo',
            'age'=>'32',
            'nationality' => 'Australian',
            'points'=>'8',
            'scuderia'=>'McLaren',
            'number'=>'3',
            'value'=>'500000',
            'image'=>'https://www.formula1.com/content/dam/fom-website/drivers/D/DANRIC01_Daniel_Ricciardo/danric01.png.transform/2col/image.png' 
        ]);

        DB::table('drivers')->insert([
            'name'=>'Pierre Gasly',
            'age'=>'25',
            'nationality' => 'French',
            'points'=>'6',
            'scuderia'=>'AlphaTauri',
            'number'=>'10',
            'value'=>'400000',
            'image'=>'https://www.formula1.com/content/dam/fom-website/drivers/P/PIEGAS01_Pierre_Gasly/piegas01.png.transform/2col/image.png'
        ]);

        DB::table('drivers')->insert([
            'name'=>'Yuki Tsunoda',
            'age'=>'21',
            'nationality' => 'Japanese',
            'points'=>'4',
            'scuderia'=>'AlphaTauri',
            'number'=>'22',
            'value'=>'200000',
            'image'=>'https://www.formula1.com/content/dam/fom-website/drivers/Y/YUKTSU01_Yuki_Tsunoda/yuktsu01.png.transform/2col/image.png'
        ]);

        DB::table('drivers')->insert([
            'name'=>'Lance Stroll',
            'age'=>'23',
            'nationality' => 'Canadian',
            'points'=>'0',
            'scuderia'=>'Aston Martin',
            'number'=>'18',
            'value'=>'200000',
            'image'=>'https://www.formula1.com/content/dam/fom-website/drivers/L/LANSTR01_Lance_Stroll/lanstr01.png.transform/2col/image.png'
        ]);

        DB::table('drivers')->insert([
            'name'=>'Sebastian Vettel',
            'age'=>'34',
            'nationality' => 'German',
            'points'=>'0',
            'scuderia'=>'Aston Martin',
            'number'=>'5',
            'value'=>'300000',
            'image'=>'https://www.formula1.com/content/dam/fom-website/drivers/S/SEBVET01_Sebastian_Vettel/sebvet01.png.transform/2col/image.png'
        ]);

        DB::table('drivers')->insert([
            'name'=>'Alexander Albon',
            'age'=>'25',
            'nationality' => 'Thai',
            'points'=>'1',
            'scuderia'=>'Williams',
            'number'=>'23',
            'value'=>'200000',
            'image'=>'https://www.formula1.com/content/dam/fom-website/drivers/A/ALEALB01_Alexander_Albon/alealb01.png.transform/2col/image.png'
        ]);

        DB::table('drivers')->insert([
            'name'=>'Nicholas Latifi',
            'age'=>'26',
            'nationality' => 'Canadian',
            'points'=>'0',
            'scuderia'=>'Williams',
            'number'=>'6',
            'value'=>'100000',
            'image'=>'https://www.formula1.com/content/dam/fom-website/drivers/N/NICLAF01_Nicholas_Latifi/niclaf01.png.transform/2col/image.png'
        ]);
    }
}
