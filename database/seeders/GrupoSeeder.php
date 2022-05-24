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
            ['grupo'=>'3','materia'=>'18','usuario'=>'7','inscritos'=>'50','created_at' => now(),'updated_at' => now()],
            ['grupo'=>'5','materia'=>'19','usuario'=>'7','inscritos'=>'10','created_at' => now(),'updated_at' => now()],
            ['grupo'=>'2','materia'=>'20','usuario'=>'7','inscritos'=>'30','created_at' => now(),'updated_at' => now()],

            ['grupo'=>'2','materia'=>'21','usuario'=>'8','inscritos'=>'90','created_at' => now(),'updated_at' => now()],
            ['grupo'=>'1','materia'=>'22','usuario'=>'8','inscritos'=>'40','created_at' => now(),'updated_at' => now()],
            ['grupo'=>'2','materia'=>'23','usuario'=>'8','inscritos'=>'40','created_at' => now(),'updated_at' => now()],
            ['grupo'=>'1','materia'=>'24','usuario'=>'8','inscritos'=>'30','created_at' => now(),'updated_at' => now()],
            ['grupo'=>'1','materia'=>'25','usuario'=>'8','inscritos'=>'50','created_at' => now(),'updated_at' => now()],

            ['grupo'=>'4','materia'=>'26','usuario'=>'9','inscritos'=>'30','created_at' => now(),'updated_at' => now()],
            ['grupo'=>'10','materia'=>'27','usuario'=>'9','inscritos'=>'70','created_at' => now(),'updated_at' => now()],
            ['grupo'=>'1','materia'=>'28','usuario'=>'9','inscritos'=>'50','created_at' => now(),'updated_at' => now()],

            ['grupo'=>'3','materia'=>'29','usuario'=>'10','inscritos'=>'20','created_at' => now(),'updated_at' => now()],

            ['grupo'=>'2','materia'=>'30','usuario'=>'11','inscritos'=>'20','created_at' => now(),'updated_at' => now()],
            ['grupo'=>'3','materia'=>'31','usuario'=>'11','inscritos'=>'80','created_at' => now(),'updated_at' => now()],

            ['grupo'=>'1','materia'=>'32','usuario'=>'12','inscritos'=>'80','created_at' => now(),'updated_at' => now()],
            ['grupo'=>'2','materia'=>'33','usuario'=>'12','inscritos'=>'80','created_at' => now(),'updated_at' => now()],
            ['grupo'=>'1','materia'=>'34','usuario'=>'12','inscritos'=>'70','created_at' => now(),'updated_at' => now()],
            ['grupo'=>'2','materia'=>'35','usuario'=>'12','inscritos'=>'70','created_at' => now(),'updated_at' => now()],
            ['grupo'=>'5','materia'=>'36','usuario'=>'12','inscritos'=>'20','created_at' => now(),'updated_at' => now()],
            ['grupo'=>'1','materia'=>'37','usuario'=>'12','inscritos'=>'30','created_at' => now(),'updated_at' => now()],

            ['grupo'=>'1','materia'=>'38','usuario'=>'13','inscritos'=>'40','created_at' => now(),'updated_at' => now()],
            ['grupo'=>'1','materia'=>'39','usuario'=>'13','inscritos'=>'30','created_at' => now(),'updated_at' => now()],
            ['grupo'=>'3','materia'=>'40','usuario'=>'13','inscritos'=>'50','created_at' => now(),'updated_at' => now()],
            ['grupo'=>'7','materia'=>'41','usuario'=>'13','inscritos'=>'10','created_at' => now(),'updated_at' => now()],
            ['grupo'=>'4','materia'=>'42','usuario'=>'13','inscritos'=>'10','created_at' => now(),'updated_at' => now()],
            ['grupo'=>'1','materia'=>'43','usuario'=>'13','inscritos'=>'10','created_at' => now(),'updated_at' => now()],

            ['grupo'=>'2','materia'=>'44','usuario'=>'14','inscritos'=>'50','created_at' => now(),'updated_at' => now()],
            ['grupo'=>'1','materia'=>'45','usuario'=>'14','inscritos'=>'30','created_at' => now(),'updated_at' => now()],
            ['grupo'=>'6','materia'=>'46','usuario'=>'14','inscritos'=>'30','created_at' => now(),'updated_at' => now()],
            ['grupo'=>'4','materia'=>'47','usuario'=>'14','inscritos'=>'60','created_at' => now(),'updated_at' => now()],

            ['grupo'=>'1','materia'=>'48','usuario'=>'15','inscritos'=>'50','created_at' => now(),'updated_at' => now()],
            ['grupo'=>'2','materia'=>'49','usuario'=>'15','inscritos'=>'50','created_at' => now(),'updated_at' => now()],
            ['grupo'=>'1','materia'=>'50','usuario'=>'15','inscritos'=>'20','created_at' => now(),'updated_at' => now()],
            ['grupo'=>'4','materia'=>'51','usuario'=>'15','inscritos'=>'60','created_at' => now(),'updated_at' => now()],
            ['grupo'=>'5','materia'=>'52','usuario'=>'15','inscritos'=>'20','created_at' => now(),'updated_at' => now()],

            ['grupo'=>'1','materia'=>'53','usuario'=>'16','inscritos'=>'60','created_at' => now(),'updated_at' => now()],
            ['grupo'=>'5','materia'=>'54','usuario'=>'16','inscritos'=>'70','created_at' => now(),'updated_at' => now()],

            ['grupo'=>'3','materia'=>'55','usuario'=>'17','inscritos'=>'60','created_at' => now(),'updated_at' => now()],
            ['grupo'=>'1','materia'=>'56','usuario'=>'17','inscritos'=>'70','created_at' => now(),'updated_at' => now()],

            ['grupo'=>'1','materia'=>'57','usuario'=>'18','inscritos'=>'50','created_at' => now(),'updated_at' => now()],

            ['grupo'=>'1','materia'=>'58','usuario'=>'19','inscritos'=>'60','created_at' => now(),'updated_at' => now()],
            ['grupo'=>'2','materia'=>'59','usuario'=>'19','inscritos'=>'60','created_at' => now(),'updated_at' => now()],
            ['grupo'=>'1','materia'=>'60','usuario'=>'19','inscritos'=>'50','created_at' => now(),'updated_at' => now()],

            ['grupo'=>'3','materia'=>'61','usuario'=>'20','inscritos'=>'50','created_at' => now(),'updated_at' => now()],
            ['grupo'=>'3','materia'=>'62','usuario'=>'20','inscritos'=>'60','created_at' => now(),'updated_at' => now()],

            ['grupo'=>'1','materia'=>'63','usuario'=>'21','inscritos'=>'60','created_at' => now(),'updated_at' => now()],

            ['grupo'=>'2','materia'=>'64','usuario'=>'22','inscritos'=>'80','created_at' => now(),'updated_at' => now()],
            ['grupo'=>'3','materia'=>'65','usuario'=>'22','inscritos'=>'80','created_at' => now(),'updated_at' => now()],
            ['grupo'=>'2','materia'=>'66','usuario'=>'22','inscritos'=>'70','created_at' => now(),'updated_at' => now()],
            ['grupo'=>'2','materia'=>'67','usuario'=>'22','inscritos'=>'20','created_at' => now(),'updated_at' => now()],
            ['grupo'=>'1','materia'=>'68','usuario'=>'22','inscritos'=>'50','created_at' => now(),'updated_at' => now()],
            ['grupo'=>'2','materia'=>'69','usuario'=>'22','inscritos'=>'50','created_at' => now(),'updated_at' => now()],

            ['grupo'=>'6A','materia'=>'70','usuario'=>'23','inscritos'=>'80','created_at' => now(),'updated_at' => now()],

            ['grupo'=>'1','materia'=>'71','usuario'=>'24','inscritos'=>'40','created_at' => now(),'updated_at' => now()],
            ['grupo'=>'1','materia'=>'72','usuario'=>'24','inscritos'=>'50','created_at' => now(),'updated_at' => now()],

            ['grupo'=>'3','materia'=>'73','usuario'=>'25','inscritos'=>'70','created_at' => now(),'updated_at' => now()],
            ['grupo'=>'1','materia'=>'74','usuario'=>'25','inscritos'=>'60','created_at' => now(),'updated_at' => now()],
            ['grupo'=>'2','materia'=>'75','usuario'=>'25','inscritos'=>'60','created_at' => now(),'updated_at' => now()],

            ['grupo'=>'7','materia'=>'76','usuario'=>'26','inscritos'=>'60','created_at' => now(),'updated_at' => now()],
            ['grupo'=>'1','materia'=>'77','usuario'=>'26','inscritos'=>'20','created_at' => now(),'updated_at' => now()],
            ['grupo'=>'1','materia'=>'78','usuario'=>'26','inscritos'=>'20','created_at' => now(),'updated_at' => now()],
            ['grupo'=>'6','materia'=>'79','usuario'=>'26','inscritos'=>'10','created_at' => now(),'updated_at' => now()],
            ['grupo'=>'1','materia'=>'80','usuario'=>'26','inscritos'=>'30','created_at' => now(),'updated_at' => now()],
            ['grupo'=>'1','materia'=>'81','usuario'=>'26','inscritos'=>'20','created_at' => now(),'updated_at' => now()],

            ['grupo'=>'2','materia'=>'82','usuario'=>'27','inscritos'=>'50','created_at' => now(),'updated_at' => now()],
            ['grupo'=>'1','materia'=>'83','usuario'=>'27','inscritos'=>'40','created_at' => now(),'updated_at' => now()],
            ['grupo'=>'3','materia'=>'84','usuario'=>'27','inscritos'=>'10','created_at' => now(),'updated_at' => now()],
            ['grupo'=>'1','materia'=>'85','usuario'=>'27','inscritos'=>'20','created_at' => now(),'updated_at' => now()],
            ['grupo'=>'1','materia'=>'86','usuario'=>'27','inscritos'=>'50','created_at' => now(),'updated_at' => now()],

            ['grupo'=>'5','materia'=>'87','usuario'=>'28','inscritos'=>'60','created_at' => now(),'updated_at' => now()],
            ['grupo'=>'2','materia'=>'88','usuario'=>'28','inscritos'=>'10','created_at' => now(),'updated_at' => now()],
            ['grupo'=>'1','materia'=>'89','usuario'=>'28','inscritos'=>'30','created_at' => now(),'updated_at' => now()],
            ['grupo'=>'3','materia'=>'90','usuario'=>'28','inscritos'=>'20','created_at' => now(),'updated_at' => now()],

            ['grupo'=>'3','materia'=>'91','usuario'=>'29','inscritos'=>'20','created_at' => now(),'updated_at' => now()],
            ['grupo'=>'1','materia'=>'92','usuario'=>'29','inscritos'=>'50','created_at' => now(),'updated_at' => now()],
            ['grupo'=>'1','materia'=>'93','usuario'=>'29','inscritos'=>'80','created_at' => now(),'updated_at' => now()],
            ['grupo'=>'2','materia'=>'94','usuario'=>'29','inscritos'=>'110','created_at' => now(),'updated_at' => now()],

            ['grupo'=>'2','materia'=>'95','usuario'=>'30','inscritos'=>'50','created_at' => now(),'updated_at' => now()],
            ['grupo'=>'5','materia'=>'96','usuario'=>'30','inscritos'=>'20','created_at' => now(),'updated_at' => now()],
            ['grupo'=>'1','materia'=>'97','usuario'=>'30','inscritos'=>'30','created_at' => now(),'updated_at' => now()],
            ['grupo'=>'1','materia'=>'98','usuario'=>'30','inscritos'=>'30','created_at' => now(),'updated_at' => now()],
            ['grupo'=>'1','materia'=>'99','usuario'=>'30','inscritos'=>'30','created_at' => now(),'updated_at' => now()],
            ['grupo'=>'1','materia'=>'100','usuario'=>'30','inscritos'=>'20','created_at' => now(),'updated_at' => now()],

            ['grupo'=>'2','materia'=>'101','usuario'=>'31','inscritos'=>'20','created_at' => now(),'updated_at' => now()],
            ['grupo'=>'1','materia'=>'102','usuario'=>'31','inscritos'=>'40','created_at' => now(),'updated_at' => now()],
            ['grupo'=>'1','materia'=>'103','usuario'=>'31','inscritos'=>'80','created_at' => now(),'updated_at' => now()],
            ['grupo'=>'5','materia'=>'104','usuario'=>'31','inscritos'=>'70','created_at' => now(),'updated_at' => now()],

            ['grupo'=>'1','materia'=>'105','usuario'=>'32','inscritos'=>'50','created_at' => now(),'updated_at' => now()],
            ['grupo'=>'2','materia'=>'106','usuario'=>'32','inscritos'=>'50','created_at' => now(),'updated_at' => now()],
            ['grupo'=>'1','materia'=>'107','usuario'=>'32','inscritos'=>'80','created_at' => now(),'updated_at' => now()],
            ['grupo'=>'1A','materia'=>'108','usuario'=>'32','inscritos'=>'30','created_at' => now(),'updated_at' => now()],

            ['grupo'=>'3','materia'=>'109','usuario'=>'33','inscritos'=>'70','created_at' => now(),'updated_at' => now()],
            ['grupo'=>'1','materia'=>'110','usuario'=>'33','inscritos'=>'90','created_at' => now(),'updated_at' => now()],
        ];
        DB::table('grupos')->insert($data);

    }
}
