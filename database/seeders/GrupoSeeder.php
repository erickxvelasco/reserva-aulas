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
            //materias erick
            ['grupo'=>'1A','materia'=>'4','usuario'=>'2','inscritos'=>'30','created_at' => now(),'updated_at' => now()],
            ['grupo'=>'2A','materia'=>'4','usuario'=>'2','inscritos'=>'50','created_at' => now(),'updated_at' => now()],
            ['grupo'=>'4A','materia'=>'4','usuario'=>'2','inscritos'=>'25','created_at' => now(),'updated_at' => now()],
            ['grupo'=>'1B','materia'=>'5','usuario'=>'2','inscritos'=>'40','created_at' => now(),'updated_at' => now()],
            ['grupo'=>'1C','materia'=>'5','usuario'=>'2','inscritos'=>'40','created_at' => now(),'updated_at' => now()],

            //materias yasmani
            ['grupo'=>'2A','materia'=>'1','usuario'=>'3','inscritos'=>'50','created_at' => now(),'updated_at' => now()],
            ['grupo'=>'2F','materia'=>'1','usuario'=>'3','inscritos'=>'50','created_at' => now(),'updated_at' => now()],


            //materias patricia
            ['grupo'=>'1A','materia'=>'1','usuario'=>'4','inscritos'=>'30','created_at' => now(),'updated_at' => now()],
            ['grupo'=>'4A','materia'=>'2','usuario'=>'4','inscritos'=>'25','created_at' => now(),'updated_at' => now()],
            ['grupo'=>'1','materia'=>'2','usuario'=>'4','inscritos'=>'40','created_at' => now(),'updated_at' => now()],
            ['grupo'=>'2','materia'=>'3','usuario'=>'4','inscritos'=>'40','created_at' => now(),'updated_at' => now()],

            //materias einar
            ['grupo'=>'1A','materia'=>'4','usuario'=>'5','inscritos'=>'30','created_at' => now(),'updated_at' => now()],
            ['grupo'=>'2A','materia'=>'4','usuario'=>'5','inscritos'=>'50','created_at' => now(),'updated_at' => now()],
            ['grupo'=>'4','materia'=>'6','usuario'=>'5','inscritos'=>'25','created_at' => now(),'updated_at' => now()],
            ['grupo'=>'1','materia'=>'6','usuario'=>'5','inscritos'=>'40','created_at' => now(),'updated_at' => now()],

            ['grupo'=>'2','materia'=>'43','usuario'=>'6','inscritos'=>'90','created_at' => now(),'updated_at' => now()],
            ['grupo'=>'1','materia'=>'14','usuario'=>'6','inscritos'=>'40','created_at' => now(),'updated_at' => now()],
            ['grupo'=>'2','materia'=>'15','usuario'=>'6','inscritos'=>'40','created_at' => now(),'updated_at' => now()],
            ['grupo'=>'1','materia'=>'13','usuario'=>'6','inscritos'=>'30','created_at' => now(),'updated_at' => now()],
            ['grupo'=>'1','materia'=>'8','usuario'=>'6','inscritos'=>'50','created_at' => now(),'updated_at' => now()],
            //docente ayoroa
            ['grupo'=>'3','materia'=>'6','usuario'=>'7','inscritos'=>'50','created_at' => now(),'updated_at' => now()],
            ['grupo'=>'5','materia'=>'8','usuario'=>'7','inscritos'=>'10','created_at' => now(),'updated_at' => now()],
            ['grupo'=>'2','materia'=>'9','usuario'=>'7','inscritos'=>'30','created_at' => now(),'updated_at' => now()],

            ['grupo'=>'2','materia'=>'3','usuario'=>'8','inscritos'=>'90','created_at' => now(),'updated_at' => now()],
            ['grupo'=>'1','materia'=>'10','usuario'=>'8','inscritos'=>'40','created_at' => now(),'updated_at' => now()],
            ['grupo'=>'2','materia'=>'10','usuario'=>'8','inscritos'=>'40','created_at' => now(),'updated_at' => now()],
            ['grupo'=>'1','materia'=>'11','usuario'=>'8','inscritos'=>'30','created_at' => now(),'updated_at' => now()],
            ['grupo'=>'1','materia'=>'12','usuario'=>'8','inscritos'=>'50','created_at' => now(),'updated_at' => now()],

            ['grupo'=>'4','materia'=>'13','usuario'=>'9','inscritos'=>'30','created_at' => now(),'updated_at' => now()],
            ['grupo'=>'10','materia'=>'1','usuario'=>'9','inscritos'=>'70','created_at' => now(),'updated_at' => now()],
            ['grupo'=>'1','materia'=>'14','usuario'=>'9','inscritos'=>'50','created_at' => now(),'updated_at' => now()],

            ['grupo'=>'3','materia'=>'15','usuario'=>'10','inscritos'=>'20','created_at' => now(),'updated_at' => now()],

            ['grupo'=>'2','materia'=>'16','usuario'=>'11','inscritos'=>'20','created_at' => now(),'updated_at' => now()],
            ['grupo'=>'3','materia'=>'17','usuario'=>'11','inscritos'=>'80','created_at' => now(),'updated_at' => now()],

            ['grupo'=>'1','materia'=>'18','usuario'=>'12','inscritos'=>'80','created_at' => now(),'updated_at' => now()],
            ['grupo'=>'2','materia'=>'18','usuario'=>'12','inscritos'=>'80','created_at' => now(),'updated_at' => now()],
            ['grupo'=>'1','materia'=>'19','usuario'=>'12','inscritos'=>'70','created_at' => now(),'updated_at' => now()],
            ['grupo'=>'2','materia'=>'19','usuario'=>'12','inscritos'=>'70','created_at' => now(),'updated_at' => now()],
            ['grupo'=>'5','materia'=>'17','usuario'=>'12','inscritos'=>'20','created_at' => now(),'updated_at' => now()],
            ['grupo'=>'1','materia'=>'20','usuario'=>'12','inscritos'=>'30','created_at' => now(),'updated_at' => now()],
            ['grupo'=>'1','materia'=>'21','usuario'=>'12','inscritos'=>'30','created_at' => now(),'updated_at' => now()],

            ['grupo'=>'1','materia'=>'22','usuario'=>'13','inscritos'=>'40','created_at' => now(),'updated_at' => now()],
            ['grupo'=>'1','materia'=>'23','usuario'=>'13','inscritos'=>'30','created_at' => now(),'updated_at' => now()],
            ['grupo'=>'3','materia'=>'8','usuario'=>'13','inscritos'=>'50','created_at' => now(),'updated_at' => now()],
            ['grupo'=>'7','materia'=>'24','usuario'=>'13','inscritos'=>'10','created_at' => now(),'updated_at' => now()],
            ['grupo'=>'4','materia'=>'26','usuario'=>'13','inscritos'=>'10','created_at' => now(),'updated_at' => now()],
            ['grupo'=>'1','materia'=>'26','usuario'=>'13','inscritos'=>'10','created_at' => now(),'updated_at' => now()],

            ['grupo'=>'2','materia'=>'23','usuario'=>'14','inscritos'=>'50','created_at' => now(),'updated_at' => now()],
            ['grupo'=>'1','materia'=>'27','usuario'=>'14','inscritos'=>'30','created_at' => now(),'updated_at' => now()],
            ['grupo'=>'6','materia'=>'13','usuario'=>'14','inscritos'=>'30','created_at' => now(),'updated_at' => now()],
            ['grupo'=>'4','materia'=>'26','usuario'=>'14','inscritos'=>'60','created_at' => now(),'updated_at' => now()],

            ['grupo'=>'1','materia'=>'28','usuario'=>'15','inscritos'=>'50','created_at' => now(),'updated_at' => now()],
            ['grupo'=>'2','materia'=>'28','usuario'=>'15','inscritos'=>'50','created_at' => now(),'updated_at' => now()],
            ['grupo'=>'1','materia'=>'9','usuario'=>'15','inscritos'=>'20','created_at' => now(),'updated_at' => now()],
            ['grupo'=>'4','materia'=>'1','usuario'=>'15','inscritos'=>'60','created_at' => now(),'updated_at' => now()],
            ['grupo'=>'5','materia'=>'17','usuario'=>'15','inscritos'=>'20','created_at' => now(),'updated_at' => now()],

            ['grupo'=>'1','materia'=>'30','usuario'=>'16','inscritos'=>'60','created_at' => now(),'updated_at' => now()],
            ['grupo'=>'5','materia'=>'29','usuario'=>'16','inscritos'=>'70','created_at' => now(),'updated_at' => now()],

            ['grupo'=>'3','materia'=>'31','usuario'=>'17','inscritos'=>'60','created_at' => now(),'updated_at' => now()],
            ['grupo'=>'1','materia'=>'31','usuario'=>'17','inscritos'=>'70','created_at' => now(),'updated_at' => now()],

            ['grupo'=>'1','materia'=>'32','usuario'=>'18','inscritos'=>'50','created_at' => now(),'updated_at' => now()],

            ['grupo'=>'1','materia'=>'4','usuario'=>'19','inscritos'=>'60','created_at' => now(),'updated_at' => now()],
            ['grupo'=>'2','materia'=>'4','usuario'=>'19','inscritos'=>'60','created_at' => now(),'updated_at' => now()],
            ['grupo'=>'1','materia'=>'33','usuario'=>'19','inscritos'=>'50','created_at' => now(),'updated_at' => now()],

            ['grupo'=>'3','materia'=>'34','usuario'=>'20','inscritos'=>'50','created_at' => now(),'updated_at' => now()],
            ['grupo'=>'3','materia'=>'35','usuario'=>'20','inscritos'=>'60','created_at' => now(),'updated_at' => now()],

            ['grupo'=>'1','materia'=>'29','usuario'=>'21','inscritos'=>'60','created_at' => now(),'updated_at' => now()],

            ['grupo'=>'2','materia'=>'2','usuario'=>'22','inscritos'=>'80','created_at' => now(),'updated_at' => now()],
            ['grupo'=>'3','materia'=>'2','usuario'=>'22','inscritos'=>'80','created_at' => now(),'updated_at' => now()],
            ['grupo'=>'2','materia'=>'1','usuario'=>'22','inscritos'=>'70','created_at' => now(),'updated_at' => now()],
            ['grupo'=>'2','materia'=>'15','usuario'=>'22','inscritos'=>'20','created_at' => now(),'updated_at' => now()],
            ['grupo'=>'1','materia'=>'36','usuario'=>'22','inscritos'=>'50','created_at' => now(),'updated_at' => now()],
            ['grupo'=>'2','materia'=>'30','usuario'=>'22','inscritos'=>'50','created_at' => now(),'updated_at' => now()],

            ['grupo'=>'6A','materia'=>'1','usuario'=>'23','inscritos'=>'80','created_at' => now(),'updated_at' => now()],

            ['grupo'=>'1','materia'=>'15','usuario'=>'24','inscritos'=>'40','created_at' => now(),'updated_at' => now()],
            ['grupo'=>'1','materia'=>'12','usuario'=>'24','inscritos'=>'50','created_at' => now(),'updated_at' => now()],

            ['grupo'=>'3','materia'=>'10','usuario'=>'25','inscritos'=>'70','created_at' => now(),'updated_at' => now()],
            ['grupo'=>'1','materia'=>'20','usuario'=>'25','inscritos'=>'60','created_at' => now(),'updated_at' => now()],
            ['grupo'=>'2','materia'=>'11','usuario'=>'25','inscritos'=>'60','created_at' => now(),'updated_at' => now()],

           

        ];
        DB::table('grupos')->insert($data);

    }
}
