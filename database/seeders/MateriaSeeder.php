<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class MateriaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data=[
            ['descripcion'=>'introduccion a la programacion','departamento'=>'sistemas','created_at' => now(),'updated_at' => now()],
            ['descripcion'=>'elementos de programacion estructura de datos','departamento'=>'sistemas','created_at' => now(),'updated_at' => now()],
            ['descripcion'=>'base de datos I','departamento'=>'sistemas','created_at' => now(),'updated_at' => now()],
            ['descripcion'=>'base de datos II','departamento'=>'sistemas','created_at' => now(),'updated_at' => now()],
            ['descripcion'=>'sistemas de informacion I','departamento'=>'sistemas','created_at' => now(),'updated_at' => now()],

            ['descripcion'=>'ingenieria de software','departamento'=>'sistemas','created_at' => now(),'updated_at' => now()],

            ['descripcion'=>'sistemas de informacion II','departamento'=>'sistemas','created_at' => now(),'updated_at' => now()],
            ['descripcion'=>'taller de metodos de programacion','departamento'=>'sistemas','created_at' => now(),'updated_at' => now()],
            ['descripcion'=>'taller de base de datos','departamento'=>'sistemas','created_at' => now(),'updated_at' => now()],
            ['descripcion'=>'taller de ingenieria de software','departamento'=>'sistemas','created_at' => now(),'updated_at' => now()],
            ['descripcion'=>'entornos virtuales de aprendizaje','departamento'=>'sistemas','created_at' => now(),'updated_at' => now()],
            ['descripcion'=>'reconocimiento de voz','departamento'=>'sistemas','created_at' => now(),'updated_at' => now()],
            ['descripcion'=>'datawarehouse','departamento'=>'sistemas','created_at' => now(),'updated_at' => now()],

            ['descripcion'=>'inteligencia artificial (I)','departamento'=>'sistemas','created_at' => now(),'updated_at' => now()],
            ['descripcion'=>'matematica computacional II','departamento'=>'sistemas','created_at' => now(),'updated_at' => now()],
            ['descripcion'=>'taller de ingenieria de software','departamento'=>'sistemas','created_at' => now(),'updated_at' => now()],
            ['descripcion'=>'web semantica','departamento'=>'sistemas','created_at' => now(),'updated_at' => now()],
            ['descripcion'=>'proyecto final','departamento'=>'sistemas','created_at' => now(),'updated_at' => now()],
        ];
        DB::table('materias')->insert($data);
    }
}
