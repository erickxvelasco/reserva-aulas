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
            ['grupo'=>'1','materia'=>'1','usuario'=>'3','inscritos'=>'50','created_at' => now(),'updated_at' => now()],
            ['grupo'=>'2','materia'=>'1','usuario'=>'3','inscritos'=>'50','created_at' => now(),'updated_at' => now()],
            ['grupo'=>'1','materia'=>'1','usuario'=>'3','inscritos'=>'25','created_at' => now(),'updated_at' => now()],
            ['grupo'=>'2','materia'=>'1','usuario'=>'3','inscritos'=>'40','created_at' => now(),'updated_at' => now()],

            //materias patricia
            ['grupo'=>'1A','materia'=>'1','usuario'=>'4','inscritos'=>'30','created_at' => now(),'updated_at' => now()],
            ['grupo'=>'2','materia'=>'1','usuario'=>'4','inscritos'=>'50','created_at' => now(),'updated_at' => now()],
            ['grupo'=>'4A','materia'=>'1','usuario'=>'4','inscritos'=>'25','created_at' => now(),'updated_at' => now()],
            ['grupo'=>'1','materia'=>'1','usuario'=>'4','inscritos'=>'40','created_at' => now(),'updated_at' => now()],
            ['grupo'=>'2','materia'=>'1','usuario'=>'4','inscritos'=>'40','created_at' => now(),'updated_at' => now()],

            //materias einar
            ['grupo'=>'1A','materia'=>'1','usuario'=>'5','inscritos'=>'30','created_at' => now(),'updated_at' => now()],
            ['grupo'=>'2A','materia'=>'1','usuario'=>'5','inscritos'=>'50','created_at' => now(),'updated_at' => now()],
            ['grupo'=>'4','materia'=>'1','usuario'=>'5','inscritos'=>'25','created_at' => now(),'updated_at' => now()],
            ['grupo'=>'1','materia'=>'1','usuario'=>'5','inscritos'=>'40','created_at' => now(),'updated_at' => now()],

            //docente ayoroa
            ['grupo'=>'3','materia'=>'1','usuario'=>'7','inscritos'=>'50','created_at' => now(),'updated_at' => now()],
            ['grupo'=>'5','materia'=>'1','usuario'=>'7','inscritos'=>'10','created_at' => now(),'updated_at' => now()],
            ['grupo'=>'2','materia'=>'1','usuario'=>'7','inscritos'=>'30','created_at' => now(),'updated_at' => now()],

            ['grupo'=>'2','materia'=>'1','usuario'=>'8','inscritos'=>'90','created_at' => now(),'updated_at' => now()],
            ['grupo'=>'1','materia'=>'1','usuario'=>'8','inscritos'=>'40','created_at' => now(),'updated_at' => now()],
            ['grupo'=>'2','materia'=>'1','usuario'=>'8','inscritos'=>'40','created_at' => now(),'updated_at' => now()],
            ['grupo'=>'1','materia'=>'1','usuario'=>'8','inscritos'=>'30','created_at' => now(),'updated_at' => now()],
            ['grupo'=>'1','materia'=>'1','usuario'=>'8','inscritos'=>'50','created_at' => now(),'updated_at' => now()],

            ['grupo'=>'4','materia'=>'1','usuario'=>'9','inscritos'=>'30','created_at' => now(),'updated_at' => now()],
            ['grupo'=>'10','materia'=>'1','usuario'=>'9','inscritos'=>'70','created_at' => now(),'updated_at' => now()],
            ['grupo'=>'1','materia'=>'1','usuario'=>'9','inscritos'=>'50','created_at' => now(),'updated_at' => now()],

            ['grupo'=>'3','materia'=>'1','usuario'=>'10','inscritos'=>'20','created_at' => now(),'updated_at' => now()],

            ['grupo'=>'2','materia'=>'1','usuario'=>'11','inscritos'=>'20','created_at' => now(),'updated_at' => now()],
            ['grupo'=>'3','materia'=>'1','usuario'=>'11','inscritos'=>'80','created_at' => now(),'updated_at' => now()],

            ['grupo'=>'1','materia'=>'1','usuario'=>'12','inscritos'=>'80','created_at' => now(),'updated_at' => now()],
            ['grupo'=>'2','materia'=>'1','usuario'=>'12','inscritos'=>'80','created_at' => now(),'updated_at' => now()],
            ['grupo'=>'1','materia'=>'1','usuario'=>'12','inscritos'=>'70','created_at' => now(),'updated_at' => now()],
            ['grupo'=>'2','materia'=>'1','usuario'=>'12','inscritos'=>'70','created_at' => now(),'updated_at' => now()],
            ['grupo'=>'5','materia'=>'1','usuario'=>'12','inscritos'=>'20','created_at' => now(),'updated_at' => now()],
            ['grupo'=>'1','materia'=>'1','usuario'=>'12','inscritos'=>'30','created_at' => now(),'updated_at' => now()],
            ['grupo'=>'1','materia'=>'1','usuario'=>'12','inscritos'=>'30','created_at' => now(),'updated_at' => now()],

            ['grupo'=>'1','materia'=>'1','usuario'=>'13','inscritos'=>'40','created_at' => now(),'updated_at' => now()],
            ['grupo'=>'1','materia'=>'1','usuario'=>'13','inscritos'=>'30','created_at' => now(),'updated_at' => now()],
            ['grupo'=>'3','materia'=>'1','usuario'=>'13','inscritos'=>'50','created_at' => now(),'updated_at' => now()],
            ['grupo'=>'7','materia'=>'1','usuario'=>'13','inscritos'=>'10','created_at' => now(),'updated_at' => now()],
            ['grupo'=>'4','materia'=>'1','usuario'=>'13','inscritos'=>'10','created_at' => now(),'updated_at' => now()],
            ['grupo'=>'1','materia'=>'1','usuario'=>'13','inscritos'=>'10','created_at' => now(),'updated_at' => now()],

            ['grupo'=>'2','materia'=>'1','usuario'=>'14','inscritos'=>'50','created_at' => now(),'updated_at' => now()],
            ['grupo'=>'1','materia'=>'1','usuario'=>'14','inscritos'=>'30','created_at' => now(),'updated_at' => now()],
            ['grupo'=>'6','materia'=>'1','usuario'=>'14','inscritos'=>'30','created_at' => now(),'updated_at' => now()],
            ['grupo'=>'4','materia'=>'1','usuario'=>'14','inscritos'=>'60','created_at' => now(),'updated_at' => now()],

            ['grupo'=>'1','materia'=>'1','usuario'=>'15','inscritos'=>'50','created_at' => now(),'updated_at' => now()],
            ['grupo'=>'2','materia'=>'1','usuario'=>'15','inscritos'=>'50','created_at' => now(),'updated_at' => now()],
            ['grupo'=>'1','materia'=>'1','usuario'=>'15','inscritos'=>'20','created_at' => now(),'updated_at' => now()],
            ['grupo'=>'4','materia'=>'1','usuario'=>'15','inscritos'=>'60','created_at' => now(),'updated_at' => now()],
            ['grupo'=>'5','materia'=>'1','usuario'=>'15','inscritos'=>'20','created_at' => now(),'updated_at' => now()],

            ['grupo'=>'1','materia'=>'1','usuario'=>'16','inscritos'=>'60','created_at' => now(),'updated_at' => now()],
            ['grupo'=>'5','materia'=>'1','usuario'=>'16','inscritos'=>'70','created_at' => now(),'updated_at' => now()],

            ['grupo'=>'3','materia'=>'1','usuario'=>'17','inscritos'=>'60','created_at' => now(),'updated_at' => now()],
            ['grupo'=>'1','materia'=>'1','usuario'=>'17','inscritos'=>'70','created_at' => now(),'updated_at' => now()],

            ['grupo'=>'1','materia'=>'1','usuario'=>'18','inscritos'=>'50','created_at' => now(),'updated_at' => now()],

            ['grupo'=>'1','materia'=>'1','usuario'=>'19','inscritos'=>'60','created_at' => now(),'updated_at' => now()],
            ['grupo'=>'2','materia'=>'1','usuario'=>'19','inscritos'=>'60','created_at' => now(),'updated_at' => now()],
            ['grupo'=>'1','materia'=>'1','usuario'=>'19','inscritos'=>'50','created_at' => now(),'updated_at' => now()],

            ['grupo'=>'3','materia'=>'1','usuario'=>'20','inscritos'=>'50','created_at' => now(),'updated_at' => now()],
            ['grupo'=>'3','materia'=>'1','usuario'=>'20','inscritos'=>'60','created_at' => now(),'updated_at' => now()],

            ['grupo'=>'1','materia'=>'1','usuario'=>'21','inscritos'=>'60','created_at' => now(),'updated_at' => now()],

            ['grupo'=>'2','materia'=>'1','usuario'=>'22','inscritos'=>'80','created_at' => now(),'updated_at' => now()],
            ['grupo'=>'3','materia'=>'1','usuario'=>'22','inscritos'=>'80','created_at' => now(),'updated_at' => now()],
            ['grupo'=>'2','materia'=>'1','usuario'=>'22','inscritos'=>'70','created_at' => now(),'updated_at' => now()],
            ['grupo'=>'2','materia'=>'1','usuario'=>'22','inscritos'=>'20','created_at' => now(),'updated_at' => now()],
            ['grupo'=>'1','materia'=>'1','usuario'=>'22','inscritos'=>'50','created_at' => now(),'updated_at' => now()],
            ['grupo'=>'2','materia'=>'1','usuario'=>'22','inscritos'=>'50','created_at' => now(),'updated_at' => now()],

            ['grupo'=>'6A','materia'=>'1','usuario'=>'23','inscritos'=>'80','created_at' => now(),'updated_at' => now()],

            ['grupo'=>'1','materia'=>'1','usuario'=>'24','inscritos'=>'40','created_at' => now(),'updated_at' => now()],
            ['grupo'=>'1','materia'=>'1','usuario'=>'24','inscritos'=>'50','created_at' => now(),'updated_at' => now()],

            ['grupo'=>'3','materia'=>'1','usuario'=>'25','inscritos'=>'70','created_at' => now(),'updated_at' => now()],
            ['grupo'=>'1','materia'=>'1','usuario'=>'25','inscritos'=>'60','created_at' => now(),'updated_at' => now()],
            ['grupo'=>'2','materia'=>'1','usuario'=>'25','inscritos'=>'60','created_at' => now(),'updated_at' => now()],

            ['grupo'=>'7','materia'=>'1','usuario'=>'26','inscritos'=>'60','created_at' => now(),'updated_at' => now()],
            ['grupo'=>'1','materia'=>'1','usuario'=>'26','inscritos'=>'20','created_at' => now(),'updated_at' => now()],
            ['grupo'=>'1','materia'=>'1','usuario'=>'26','inscritos'=>'20','created_at' => now(),'updated_at' => now()],
            ['grupo'=>'6','materia'=>'1','usuario'=>'26','inscritos'=>'10','created_at' => now(),'updated_at' => now()],
            ['grupo'=>'1','materia'=>'1','usuario'=>'26','inscritos'=>'30','created_at' => now(),'updated_at' => now()],
            ['grupo'=>'1','materia'=>'1','usuario'=>'26','inscritos'=>'20','created_at' => now(),'updated_at' => now()],

            ['grupo'=>'2','materia'=>'1','usuario'=>'27','inscritos'=>'50','created_at' => now(),'updated_at' => now()],
            ['grupo'=>'1','materia'=>'1','usuario'=>'27','inscritos'=>'40','created_at' => now(),'updated_at' => now()],
            ['grupo'=>'3','materia'=>'1','usuario'=>'27','inscritos'=>'10','created_at' => now(),'updated_at' => now()],
            ['grupo'=>'1','materia'=>'1','usuario'=>'27','inscritos'=>'20','created_at' => now(),'updated_at' => now()],
            ['grupo'=>'1','materia'=>'1','usuario'=>'27','inscritos'=>'50','created_at' => now(),'updated_at' => now()],

            ['grupo'=>'5','materia'=>'1','usuario'=>'28','inscritos'=>'60','created_at' => now(),'updated_at' => now()],
            ['grupo'=>'2','materia'=>'1','usuario'=>'28','inscritos'=>'10','created_at' => now(),'updated_at' => now()],
            ['grupo'=>'1','materia'=>'1','usuario'=>'28','inscritos'=>'30','created_at' => now(),'updated_at' => now()],
            ['grupo'=>'3','materia'=>'1','usuario'=>'28','inscritos'=>'20','created_at' => now(),'updated_at' => now()],

            ['grupo'=>'3','materia'=>'1','usuario'=>'29','inscritos'=>'20','created_at' => now(),'updated_at' => now()],
            ['grupo'=>'1','materia'=>'1','usuario'=>'29','inscritos'=>'50','created_at' => now(),'updated_at' => now()],
            ['grupo'=>'1','materia'=>'1','usuario'=>'29','inscritos'=>'80','created_at' => now(),'updated_at' => now()],
            ['grupo'=>'2','materia'=>'1','usuario'=>'29','inscritos'=>'110','created_at' => now(),'updated_at' => now()],

            ['grupo'=>'2','materia'=>'1','usuario'=>'30','inscritos'=>'50','created_at' => now(),'updated_at' => now()],
            ['grupo'=>'5','materia'=>'1','usuario'=>'30','inscritos'=>'20','created_at' => now(),'updated_at' => now()],
            ['grupo'=>'1','materia'=>'1','usuario'=>'30','inscritos'=>'30','created_at' => now(),'updated_at' => now()],
            ['grupo'=>'1','materia'=>'1','usuario'=>'30','inscritos'=>'30','created_at' => now(),'updated_at' => now()],
            ['grupo'=>'1','materia'=>'1','usuario'=>'30','inscritos'=>'30','created_at' => now(),'updated_at' => now()],
            ['grupo'=>'1','materia'=>'1','usuario'=>'30','inscritos'=>'20','created_at' => now(),'updated_at' => now()],

            ['grupo'=>'2','materia'=>'1','usuario'=>'31','inscritos'=>'20','created_at' => now(),'updated_at' => now()],
            ['grupo'=>'1','materia'=>'1','usuario'=>'31','inscritos'=>'40','created_at' => now(),'updated_at' => now()],
            ['grupo'=>'1','materia'=>'1','usuario'=>'31','inscritos'=>'80','created_at' => now(),'updated_at' => now()],
            ['grupo'=>'5','materia'=>'1','usuario'=>'31','inscritos'=>'70','created_at' => now(),'updated_at' => now()],

            ['grupo'=>'1','materia'=>'1','usuario'=>'32','inscritos'=>'50','created_at' => now(),'updated_at' => now()],
            ['grupo'=>'2','materia'=>'1','usuario'=>'32','inscritos'=>'50','created_at' => now(),'updated_at' => now()],
            ['grupo'=>'1','materia'=>'1','usuario'=>'32','inscritos'=>'80','created_at' => now(),'updated_at' => now()],
            ['grupo'=>'1A','materia'=>'1','usuario'=>'32','inscritos'=>'30','created_at' => now(),'updated_at' => now()],

            ['grupo'=>'3','materia'=>'1','usuario'=>'33','inscritos'=>'70','created_at' => now(),'updated_at' => now()],
            ['grupo'=>'1','materia'=>'1','usuario'=>'33','inscritos'=>'90','created_at' => now(),'updated_at' => now()],
        ];
        DB::table('grupos')->insert($data);

    }
}
