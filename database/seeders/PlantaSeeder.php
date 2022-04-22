<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class PlantaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data=[
            //edificio nuevo
            ['planta'=>'planta baja','ubicacion'=>1,'detalle'=>'null','created_at' => now(),'updated_at' => now()],
            ['planta'=>'planta 1','ubicacion'=>1,'detalle'=>'null','created_at' => now(),'updated_at' => now()],
            ['planta'=>'planta 2','ubicacion'=>1,'detalle'=>'null','created_at' => now(),'updated_at' => now()],
            ['planta'=>'planta 3','ubicacion'=>1,'detalle'=>'null','created_at' => now(),'updated_at' => now()],
            //edificio industrial
            ['planta'=>'planta baja(depto industrial)','ubicacion'=>2,'detalle'=>'null','created_at' => now(),'updated_at' => now()],
            ['planta'=>'planta 1','ubicacion'=>2,'detalle'=>'null','created_at' => now(),'updated_at' => now()],
            //trencito
            ['planta'=>'planta baja','ubicacion'=>'3','detalle'=>'null','created_at' => now(),'updated_at' => now()],
            //edificio elektro
            ['planta'=>'planta baja','ubicacion'=>'4','detalle'=>'null','created_at' => now(),'updated_at' => now()],
            ['planta'=>'planta 1','ubicacion'=>'4','detalle'=>'null','created_at' => now(),'updated_at' => now()],
            ['planta'=>'planta 2','ubicacion'=>'4','detalle'=>'null','created_at' => now(),'updated_at' => now()],
            ['planta'=>'planta 3','ubicacion'=>'4','detalle'=>'null','created_at' => now(),'updated_at' => now()],
            //edificio antiguo
            ['planta'=>'planta baja(bloque central)','ubicacion'=>'5','detalle'=>'null','created_at' => now(),'updated_at' => now()],
        ];
        DB::table('plantas')->insert($data);
    }
}
