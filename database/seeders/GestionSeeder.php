<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;
use Database\Seeders\format;
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
            ['estado'=>'1','detalle'=>'primer semestre','inicio'=>"2022-02-03",'final'=>"2022-16-07",'created_at' => now(),'updated_at' => now()],
            ['estado'=>'0','detalle'=>'invierno','inicio'=>"2022-20-07",'final'=>"2022-20-08",'created_at' => now(),'updated_at' => now()],
            ['estado'=>'0','detalle'=>'segundo semestre','inicio'=>"2022-28-08",'final'=>"2022-20-12",'created_at' => now(),'updated_at' => now()],
            ['estado'=>'0','detalle'=>'verano','inicio'=>"2023-24-01",'final'=>"2023-19-02",'created_at' => now(),'updated_at' => now()],
            ['estado'=>'0','detalle'=>'primer semestre','inicio'=>"2023-02-03",'final'=>"2023-06-07",'created_at' => now(),'updated_at' => now()],
            ['estado'=>'0','detalle'=>'invierno','inicio'=>"2023-20-07",'final'=>"2023-20-08",'created_at' => now(),'updated_at' => now()],
            ['estado'=>'0','detalle'=>'segundo semestre','inicio'=>"2023-28-08",'final'=>"2023-20-12",'created_at' => now(),'updated_at' => now()],
        ];
        DB::table('gestiones')->insert($data);
    }
}
