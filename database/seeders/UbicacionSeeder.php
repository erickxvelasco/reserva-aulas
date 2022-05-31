<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
class UbicacionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data=[
            ['ubicacion'=>'edificio nuevo','detalle'=>'Esta ubicado en el lado sur entre la Calle Julian Maria Lopez','created_at' => now(),'updated_at' => now()],
            ['ubicacion'=>'edificio industrial','detalle'=>'Esta ubicado en el lado sur, al frente de la biblioteca fcyt','created_at' => now(),'updated_at' => now()],
            ['ubicacion'=>'trencito','detalle'=>'Esta ubicado en el lado sur, a lado de la ventanilla de valorados','created_at' => now(),'updated_at' => now()],
            ['ubicacion'=>'edificio elektro','detalle'=>'Esta ubicado en el lado este, pasando el parqueo','created_at' => now(),'updated_at' => now()],
            ['ubicacion'=>'edificio antiguo','detalle'=>'Esta ubicado en el lado este, en el mismo edificio de la venta de matriculas','created_at' => now(),'updated_at' => now()]
        ];
        DB::table('ubicaciones')->insert($data);
    }
}
