<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class CargoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data=[
            ['descripcion'=>'Docente','created_at' => now(),'updated_at' => now()],
            ['descripcion'=>'Auxiliar','created_at' => now(),'updated_at' => now()],
            ['descripcion'=>'Administrativo','created_at' => now(),'updated_at' => now()],
            ['descripcion'=>'Invitado','created_at' => now(),'updated_at' => now()]
        ];
        DB::table('cargos')->insert($data);
    }
}
