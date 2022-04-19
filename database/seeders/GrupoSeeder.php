<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class GrupoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data=[
            ['grupo'=>'1A','materia'=>'1','usuario'=>'2','inscritos'=>'30','created_at' => now(),'updated_at' => now()],
            ['grupo'=>'2A','materia'=>'1','usuario'=>'2','inscritos'=>'50','created_at' => now(),'updated_at' => now()],
            ['grupo'=>'4','materia'=>'2','usuario'=>'2','inscritos'=>'25','created_at' => now(),'updated_at' => now()],
            ['grupo'=>'4','materia'=>'2','usuario'=>'2','inscritos'=>'20','created_at' => now(),'updated_at' => now()],
            ['grupo'=>'1','materia'=>'3','usuario'=>'2','inscritos'=>'40','created_at' => now(),'updated_at' => now()],
            ['grupo'=>'1','materia'=>'3','usuario'=>'2','inscritos'=>'35','created_at' => now(),'updated_at' => now()],


        ];
        DB::table('grupos')->insert($data);

    }
}
