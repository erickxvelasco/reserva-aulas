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
            ['ubicacion'=>'edificio nuevo','descripcion'=>'null','created_at' => now(),'updated_at' => now()],
            ['ubicacion'=>'edificio industrial','descripcion'=>'null','created_at' => now(),'updated_at' => now()],
            ['ubicacion'=>'trencito','descripcion'=>'null','created_at' => now(),'updated_at' => now()],
            ['ubicacion'=>'edificio electrica','descripcion'=>'null','created_at' => now(),'updated_at' => now()],
            ['ubicacion'=>'edificio antiguo','descripcion'=>'null','created_at' => now(),'updated_at' => now()]
        ];
        DB::table('ubicaciones')->insert($data);
    }
}
