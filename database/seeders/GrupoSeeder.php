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

            ['grupo'=>'3A','materia'=>'2','usuario'=>'3','inscritos'=>'30','created_at' => now(),'updated_at' => now()],
            ['grupo'=>'3A','materia'=>'2','usuario'=>'3','inscritos'=>'50','created_at' => now(),'updated_at' => now()],
            ['grupo'=>'3','materia'=>'2','usuario'=>'3','inscritos'=>'25','created_at' => now(),'updated_at' => now()],

            ['grupo'=>'2','materia'=>'3','usuario'=>'4','inscritos'=>'50','created_at' => now(),'updated_at' => now()],
            ['grupo'=>'2','materia'=>'3','usuario'=>'4','inscritos'=>'25','created_at' => now(),'updated_at' => now()],

            ['grupo'=>'4','materia'=>'3','usuario'=>'5','inscritos'=>'25','created_at' => now(),'updated_at' => now()],

            ['grupo'=>'2','materia'=>'14','usuario'=>'6','inscritos'=>'50','created_at' => now(),'updated_at' => now()],
            ['grupo'=>'6','materia'=>'15','usuario'=>'6','inscritos'=>'30','created_at' => now(),'updated_at' => now()],
            ['grupo'=>'4','materia'=>'16','usuario'=>'6','inscritos'=>'15','created_at' => now(),'updated_at' => now()],
            ['grupo'=>'5','materia'=>'17','usuario'=>'6','inscritos'=>'20','created_at' => now(),'updated_at' => now()],
            ['grupo'=>'4','materia'=>'18','usuario'=>'6','inscritos'=>'10','created_at' => now(),'updated_at' => now()],

            ['grupo'=>'3D','materia'=>'4','usuario'=>'7','inscritos'=>'40','created_at' => now(),'updated_at' => now()],
            ['grupo'=>'1C','materia'=>'4','usuario'=>'7','inscritos'=>'35','created_at' => now(),'updated_at' => now()],

            ['grupo'=>'3B','materia'=>'5','usuario'=>'8','inscritos'=>'20','created_at' => now(),'updated_at' => now()],

            ['grupo'=>'1','materia'=>'6','usuario'=>'9','inscritos'=>'40','created_at' => now(),'updated_at' => now()],
            ['grupo'=>'2','materia'=>'6','usuario'=>'9','inscritos'=>'35','created_at' => now(),'updated_at' => now()],

            ['grupo'=>'4','materia'=>'7','usuario'=>'10','inscritos'=>'20','created_at' => now(),'updated_at' => now()],

            ['grupo'=>'2','materia'=>'8','usuario'=>'11','inscritos'=>'45','created_at' => now(),'updated_at' => now()],
            ['grupo'=>'3','materia'=>'8','usuario'=>'11','inscritos'=>'34','created_at' => now(),'updated_at' => now()],

            ['grupo'=>'3','materia'=>'9','usuario'=>'12','inscritos'=>'35','created_at' => now(),'updated_at' => now()],


            ['grupo'=>'4','materia'=>'4','usuario'=>'13','inscritos'=>'40','created_at' => now(),'updated_at' => now()],
            ['grupo'=>'3','materia'=>'4','usuario'=>'13','inscritos'=>'35','created_at' => now(),'updated_at' => now()],

            ['grupo'=>'3','materia'=>'5','usuario'=>'14','inscritos'=>'20','created_at' => now(),'updated_at' => now()],

            ['grupo'=>'5','materia'=>'6','usuario'=>'15','inscritos'=>'40','created_at' => now(),'updated_at' => now()],
            ['grupo'=>'3','materia'=>'6','usuario'=>'15','inscritos'=>'35','created_at' => now(),'updated_at' => now()],

            ['grupo'=>'2','materia'=>'7','usuario'=>'16','inscritos'=>'20','created_at' => now(),'updated_at' => now()],

            ['grupo'=>'4','materia'=>'8','usuario'=>'17','inscritos'=>'55','created_at' => now(),'updated_at' => now()],
            ['grupo'=>'1','materia'=>'8','usuario'=>'17','inscritos'=>'34','created_at' => now(),'updated_at' => now()],

            ['grupo'=>'2','materia'=>'9','usuario'=>'18','inscritos'=>'35','created_at' => now(),'updated_at' => now()],




        ];
        DB::table('grupos')->insert($data);

    }
}
