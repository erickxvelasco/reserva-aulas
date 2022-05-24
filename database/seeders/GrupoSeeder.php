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
            ['grupo'=>'4A','materia'=>'2','usuario'=>'2','inscritos'=>'25','created_at' => now(),'updated_at' => now()],
            ['grupo'=>'1B','materia'=>'3','usuario'=>'2','inscritos'=>'40','created_at' => now(),'updated_at' => now()],



            //docente ayoroa
            ['grupo'=>'3','materia'=>'6','usuario'=>'7','inscritos'=>'50','created_at' => now(),'updated_at' => now()],
            ['grupo'=>'5','materia'=>'7','usuario'=>'7','inscritos'=>'10','created_at' => now(),'updated_at' => now()],
            ['grupo'=>'2','materia'=>'8','usuario'=>'7','inscritos'=>'30','created_at' => now(),'updated_at' => now()],

            ['grupo'=>'2','materia'=>'9','usuario'=>'8','inscritos'=>'90','created_at' => now(),'updated_at' => now()],
            ['grupo'=>'1','materia'=>'10','usuario'=>'8','inscritos'=>'40','created_at' => now(),'updated_at' => now()],
            ['grupo'=>'2','materia'=>'11','usuario'=>'8','inscritos'=>'40','created_at' => now(),'updated_at' => now()],
            ['grupo'=>'1','materia'=>'12','usuario'=>'8','inscritos'=>'30','created_at' => now(),'updated_at' => now()],
            ['grupo'=>'1','materia'=>'13','usuario'=>'8','inscritos'=>'50','created_at' => now(),'updated_at' => now()],

            ['grupo'=>'4','materia'=>'14','usuario'=>'9','inscritos'=>'30','created_at' => now(),'updated_at' => now()],
            ['grupo'=>'10','materia'=>'15','usuario'=>'9','inscritos'=>'70','created_at' => now(),'updated_at' => now()],
            ['grupo'=>'1','materia'=>'16','usuario'=>'9','inscritos'=>'50','created_at' => now(),'updated_at' => now()],

            ['grupo'=>'3','materia'=>'17','usuario'=>'10','inscritos'=>'20','created_at' => now(),'updated_at' => now()],

            ['grupo'=>'2','materia'=>'18','usuario'=>'11','inscritos'=>'20','created_at' => now(),'updated_at' => now()],
            ['grupo'=>'3','materia'=>'19','usuario'=>'11','inscritos'=>'80','created_at' => now(),'updated_at' => now()],

            ['grupo'=>'1','materia'=>'20','usuario'=>'12','inscritos'=>'80','created_at' => now(),'updated_at' => now()],
            ['grupo'=>'2','materia'=>'21','usuario'=>'12','inscritos'=>'80','created_at' => now(),'updated_at' => now()],
            ['grupo'=>'1','materia'=>'22','usuario'=>'12','inscritos'=>'70','created_at' => now(),'updated_at' => now()],
            ['grupo'=>'2','materia'=>'23','usuario'=>'12','inscritos'=>'70','created_at' => now(),'updated_at' => now()],
            ['grupo'=>'5','materia'=>'24','usuario'=>'12','inscritos'=>'20','created_at' => now(),'updated_at' => now()],
            ['grupo'=>'1','materia'=>'25','usuario'=>'12','inscritos'=>'30','created_at' => now(),'updated_at' => now()],
            ['grupo'=>'1','materia'=>'26','usuario'=>'12','inscritos'=>'30','created_at' => now(),'updated_at' => now()],

            ['grupo'=>'1','materia'=>'27','usuario'=>'13','inscritos'=>'40','created_at' => now(),'updated_at' => now()],
            ['grupo'=>'1','materia'=>'28','usuario'=>'13','inscritos'=>'30','created_at' => now(),'updated_at' => now()],
            ['grupo'=>'3','materia'=>'29','usuario'=>'13','inscritos'=>'50','created_at' => now(),'updated_at' => now()],
            ['grupo'=>'7','materia'=>'30','usuario'=>'13','inscritos'=>'10','created_at' => now(),'updated_at' => now()],
            ['grupo'=>'4','materia'=>'31','usuario'=>'13','inscritos'=>'10','created_at' => now(),'updated_at' => now()],
            ['grupo'=>'1','materia'=>'32','usuario'=>'13','inscritos'=>'10','created_at' => now(),'updated_at' => now()],

            ['grupo'=>'2','materia'=>'33','usuario'=>'14','inscritos'=>'50','created_at' => now(),'updated_at' => now()],
            ['grupo'=>'1','materia'=>'34','usuario'=>'14','inscritos'=>'30','created_at' => now(),'updated_at' => now()],
            ['grupo'=>'6','materia'=>'35','usuario'=>'14','inscritos'=>'30','created_at' => now(),'updated_at' => now()],
            ['grupo'=>'4','materia'=>'36','usuario'=>'14','inscritos'=>'60','created_at' => now(),'updated_at' => now()],

            ['grupo'=>'1','materia'=>'37','usuario'=>'15','inscritos'=>'50','created_at' => now(),'updated_at' => now()],
            ['grupo'=>'2','materia'=>'38','usuario'=>'15','inscritos'=>'50','created_at' => now(),'updated_at' => now()],
            ['grupo'=>'1','materia'=>'39','usuario'=>'15','inscritos'=>'20','created_at' => now(),'updated_at' => now()],
            ['grupo'=>'4','materia'=>'40','usuario'=>'15','inscritos'=>'60','created_at' => now(),'updated_at' => now()],
            ['grupo'=>'5','materia'=>'41','usuario'=>'15','inscritos'=>'20','created_at' => now(),'updated_at' => now()],

            ['grupo'=>'1','materia'=>'42','usuario'=>'16','inscritos'=>'60','created_at' => now(),'updated_at' => now()],
            ['grupo'=>'5','materia'=>'43','usuario'=>'16','inscritos'=>'70','created_at' => now(),'updated_at' => now()],

            ['grupo'=>'3','materia'=>'44','usuario'=>'17','inscritos'=>'60','created_at' => now(),'updated_at' => now()],
            ['grupo'=>'1','materia'=>'45','usuario'=>'17','inscritos'=>'70','created_at' => now(),'updated_at' => now()],

            ['grupo'=>'1','materia'=>'46','usuario'=>'18','inscritos'=>'50','created_at' => now(),'updated_at' => now()],

            ['grupo'=>'1','materia'=>'47','usuario'=>'19','inscritos'=>'60','created_at' => now(),'updated_at' => now()],
            ['grupo'=>'2','materia'=>'48','usuario'=>'19','inscritos'=>'60','created_at' => now(),'updated_at' => now()],
            ['grupo'=>'1','materia'=>'49','usuario'=>'19','inscritos'=>'50','created_at' => now(),'updated_at' => now()],

            ['grupo'=>'3','materia'=>'50','usuario'=>'20','inscritos'=>'50','created_at' => now(),'updated_at' => now()],
            ['grupo'=>'3','materia'=>'51','usuario'=>'20','inscritos'=>'60','created_at' => now(),'updated_at' => now()],

            ['grupo'=>'1','materia'=>'52','usuario'=>'21','inscritos'=>'60','created_at' => now(),'updated_at' => now()],

            ['grupo'=>'2','materia'=>'53','usuario'=>'22','inscritos'=>'80','created_at' => now(),'updated_at' => now()],
            ['grupo'=>'3','materia'=>'54','usuario'=>'22','inscritos'=>'80','created_at' => now(),'updated_at' => now()],
            ['grupo'=>'2','materia'=>'55','usuario'=>'22','inscritos'=>'70','created_at' => now(),'updated_at' => now()],
            ['grupo'=>'2','materia'=>'56','usuario'=>'22','inscritos'=>'20','created_at' => now(),'updated_at' => now()],
            ['grupo'=>'1','materia'=>'57','usuario'=>'22','inscritos'=>'50','created_at' => now(),'updated_at' => now()],
            ['grupo'=>'2','materia'=>'58','usuario'=>'22','inscritos'=>'50','created_at' => now(),'updated_at' => now()],

            ['grupo'=>'6A','materia'=>'59','usuario'=>'23','inscritos'=>'80','created_at' => now(),'updated_at' => now()],

            ['grupo'=>'1','materia'=>'60','usuario'=>'24','inscritos'=>'40','created_at' => now(),'updated_at' => now()],
            ['grupo'=>'1','materia'=>'61','usuario'=>'24','inscritos'=>'50','created_at' => now(),'updated_at' => now()],

            ['grupo'=>'3','materia'=>'62','usuario'=>'25','inscritos'=>'70','created_at' => now(),'updated_at' => now()],
            ['grupo'=>'1','materia'=>'63','usuario'=>'25','inscritos'=>'60','created_at' => now(),'updated_at' => now()],
            ['grupo'=>'2','materia'=>'64','usuario'=>'25','inscritos'=>'60','created_at' => now(),'updated_at' => now()],

            ['grupo'=>'7','materia'=>'65','usuario'=>'26','inscritos'=>'60','created_at' => now(),'updated_at' => now()],
            ['grupo'=>'1','materia'=>'66','usuario'=>'26','inscritos'=>'20','created_at' => now(),'updated_at' => now()],
            ['grupo'=>'1','materia'=>'67','usuario'=>'26','inscritos'=>'20','created_at' => now(),'updated_at' => now()],
            ['grupo'=>'6','materia'=>'68','usuario'=>'26','inscritos'=>'10','created_at' => now(),'updated_at' => now()],
            ['grupo'=>'1','materia'=>'69','usuario'=>'26','inscritos'=>'30','created_at' => now(),'updated_at' => now()],
            ['grupo'=>'1','materia'=>'70','usuario'=>'26','inscritos'=>'20','created_at' => now(),'updated_at' => now()],

            ['grupo'=>'2','materia'=>'72','usuario'=>'27','inscritos'=>'50','created_at' => now(),'updated_at' => now()],
            ['grupo'=>'1','materia'=>'72','usuario'=>'27','inscritos'=>'40','created_at' => now(),'updated_at' => now()],
            ['grupo'=>'3','materia'=>'73','usuario'=>'27','inscritos'=>'10','created_at' => now(),'updated_at' => now()],
            ['grupo'=>'1','materia'=>'74','usuario'=>'27','inscritos'=>'20','created_at' => now(),'updated_at' => now()],
            ['grupo'=>'1','materia'=>'75','usuario'=>'27','inscritos'=>'50','created_at' => now(),'updated_at' => now()],

            ['grupo'=>'5','materia'=>'76','usuario'=>'28','inscritos'=>'60','created_at' => now(),'updated_at' => now()],
            ['grupo'=>'2','materia'=>'77','usuario'=>'28','inscritos'=>'10','created_at' => now(),'updated_at' => now()],
            ['grupo'=>'1','materia'=>'78','usuario'=>'28','inscritos'=>'30','created_at' => now(),'updated_at' => now()],
            ['grupo'=>'3','materia'=>'79','usuario'=>'28','inscritos'=>'20','created_at' => now(),'updated_at' => now()],

            ['grupo'=>'3','materia'=>'80','usuario'=>'29','inscritos'=>'20','created_at' => now(),'updated_at' => now()],
            ['grupo'=>'1','materia'=>'81','usuario'=>'29','inscritos'=>'50','created_at' => now(),'updated_at' => now()],
            ['grupo'=>'1','materia'=>'82','usuario'=>'29','inscritos'=>'80','created_at' => now(),'updated_at' => now()],
            ['grupo'=>'2','materia'=>'83','usuario'=>'29','inscritos'=>'110','created_at' => now(),'updated_at' => now()],

            ['grupo'=>'2','materia'=>'84','usuario'=>'30','inscritos'=>'50','created_at' => now(),'updated_at' => now()],
            ['grupo'=>'5','materia'=>'85','usuario'=>'30','inscritos'=>'20','created_at' => now(),'updated_at' => now()],
            ['grupo'=>'1','materia'=>'86','usuario'=>'30','inscritos'=>'30','created_at' => now(),'updated_at' => now()],
            ['grupo'=>'1','materia'=>'87','usuario'=>'30','inscritos'=>'30','created_at' => now(),'updated_at' => now()],
            ['grupo'=>'1','materia'=>'88','usuario'=>'30','inscritos'=>'30','created_at' => now(),'updated_at' => now()],
            ['grupo'=>'1','materia'=>'89','usuario'=>'30','inscritos'=>'20','created_at' => now(),'updated_at' => now()],

            ['grupo'=>'2','materia'=>'90','usuario'=>'31','inscritos'=>'20','created_at' => now(),'updated_at' => now()],
            ['grupo'=>'1','materia'=>'91','usuario'=>'31','inscritos'=>'40','created_at' => now(),'updated_at' => now()],
            ['grupo'=>'1','materia'=>'92','usuario'=>'31','inscritos'=>'80','created_at' => now(),'updated_at' => now()],
            ['grupo'=>'5','materia'=>'93','usuario'=>'31','inscritos'=>'70','created_at' => now(),'updated_at' => now()],

            ['grupo'=>'1','materia'=>'94','usuario'=>'32','inscritos'=>'50','created_at' => now(),'updated_at' => now()],
            ['grupo'=>'2','materia'=>'95','usuario'=>'32','inscritos'=>'50','created_at' => now(),'updated_at' => now()],
            ['grupo'=>'1','materia'=>'96','usuario'=>'32','inscritos'=>'80','created_at' => now(),'updated_at' => now()],
            ['grupo'=>'1A','materia'=>'97','usuario'=>'32','inscritos'=>'30','created_at' => now(),'updated_at' => now()],

            ['grupo'=>'3','materia'=>'98','usuario'=>'33','inscritos'=>'70','created_at' => now(),'updated_at' => now()],
            ['grupo'=>'1','materia'=>'99','usuario'=>'33','inscritos'=>'90','created_at' => now(),'updated_at' => now()],
        ];
        DB::table('grupos')->insert($data);

    }
}
