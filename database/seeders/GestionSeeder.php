<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;
use Database\Seeders\format;

use Carbon\Carbon;
class GestionSeeder extends Seeder

{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data=[
            ['estado'=>'1','detalle'=>'primer semestre','inicio'=>Carbon::create('2022','02','03'),'final'=>Carbon::create('2022','07','16'),'created_at' => now(),'updated_at' => now()],
            ['estado'=>'0','detalle'=>'invierno','inicio'=>Carbon::create('2022','07','20'),'final'=>Carbon::create('2022','08','20'),'created_at' => now(),'updated_at' => now()],
            ['estado'=>'0','detalle'=>'segundo semestre','inicio'=>Carbon::create('2022','08','27'),'final'=>Carbon::create('2022','12','20'),'created_at' => now(),'updated_at' => now()],
            ['estado'=>'0','detalle'=>'verano','inicio'=>Carbon::create('2023','01','24'),'final'=>Carbon::create('2023','02','19'),'created_at' => now(),'updated_at' => now()],
            ['estado'=>'0','detalle'=>'primer semestre','inicio'=>Carbon::create('2023','02','03'),'final'=>Carbon::create('2023','07','18'),'created_at' => now(),'updated_at' => now()],
            ['estado'=>'0','detalle'=>'invierno','inicio'=>Carbon::create('2023','07','21'),'final'=>Carbon::create('2023','08','21'),'created_at' => now(),'updated_at' => now()],
            ['estado'=>'0','detalle'=>'segundo semestre','inicio'=>Carbon::create('2023','08','28'),'final'=>Carbon::create('2023','12','15'),'created_at' => now(),'updated_at' => now()],
        ];
        DB::table('gestiones')->insert($data);
    }
}
