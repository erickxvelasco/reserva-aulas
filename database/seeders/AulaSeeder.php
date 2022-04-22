<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class AulaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data=[
            //planta baja(edificio nuevo)
            ['nombre'=>'690A','capacidad'=>'50','aulasig'=>'2','planta'=>'1','detalle'=>'null','created_at' => now(),'updated_at' => now()],
            ['nombre'=>'690B','capacidad'=>'45','aulasig'=>'3','planta'=>'1','detalle'=>'null','created_at' => now(),'updated_at' => now()],
            ['nombre'=>'690C','capacidad'=>'50','aulasig'=>'4','planta'=>'1','detalle'=>'null','created_at' => now(),'updated_at' => now()],
            ['nombre'=>'690D','capacidad'=>'55','aulasig'=>'0','planta'=>'1','detalle'=>'null','created_at' => now(),'updated_at' => now()],
            //planta 1(edificio nuevo)
            ['nombre'=>'691A','capacidad'=>'100','aulasig'=>'6','planta'=>'2','detalle'=>'null','created_at' => now(),'updated_at' => now()],
            ['nombre'=>'691B','capacidad'=>'100','aulasig'=>'7','planta'=>'2','detalle'=>'null','created_at' => now(),'updated_at' => now()],
            ['nombre'=>'691C','capacidad'=>'100','aulasig'=>'8','planta'=>'2','detalle'=>'null','created_at' => now(),'updated_at' => now()],
            ['nombre'=>'691D','capacidad'=>'100','aulasig'=>'9','planta'=>'2','detalle'=>'null','created_at' => now(),'updated_at' => now()],
            ['nombre'=>'691E','capacidad'=>'100','aulasig'=>'10','planta'=>'2','detalle'=>'null','created_at' => now(),'updated_at' => now()],
            ['nombre'=>'691F','capacidad'=>'100','aulasig'=>'0','planta'=>'2','detalle'=>'null','created_at' => now(),'updated_at' => now()],
            //planta 2(edificio nuevo)
            ['nombre'=>'692A','capacidad'=>'150','aulasig'=>'12','planta'=>'3','detalle'=>'null','created_at' => now(),'updated_at' => now()],
            ['nombre'=>'692B','capacidad'=>'150','aulasig'=>'13','planta'=>'3','detalle'=>'null','created_at' => now(),'updated_at' => now()],
            ['nombre'=>'692C','capacidad'=>'100','aulasig'=>'14','planta'=>'3','detalle'=>'null','created_at' => now(),'updated_at' => now()],
            ['nombre'=>'692D','capacidad'=>'100','aulasig'=>'15','planta'=>'3','detalle'=>'null','created_at' => now(),'updated_at' => now()],
            ['nombre'=>'692E','capacidad'=>'50','aulasig'=>'16','planta'=>'3','detalle'=>'null','created_at' => now(),'updated_at' => now()],
            ['nombre'=>'692F','capacidad'=>'50','aulasig'=>'0','planta'=>'3','detalle'=>'null','created_at' => now(),'updated_at' => now()],
           //g no tiene anterior
            ['nombre'=>'692G','capacidad'=>'150','aulasig'=>'18','planta'=>'3','detalle'=>'null','created_at' => now(),'updated_at' => now()],
            ['nombre'=>'692H','capacidad'=>'150','aulasig'=>'0','planta'=>'3','detalle'=>'null','created_at' => now(),'updated_at' => now()],
            //planta 3(edificio nuevo)
            ['nombre'=>'693A','capacidad'=>'150','aulasig'=>'20','planta'=>'4','detalle'=>'null','created_at' => now(),'updated_at' => now()],
            ['nombre'=>'693B','capacidad'=>'150','aulasig'=>'21','planta'=>'4','detalle'=>'null','created_at' => now(),'updated_at' => now()],
            ['nombre'=>'693C','capacidad'=>'100','aulasig'=>'22','planta'=>'4','detalle'=>'null','created_at' => now(),'updated_at' => now()],
            ['nombre'=>'693D','capacidad'=>'100','aulasig'=>'23','planta'=>'4','detalle'=>'null','created_at' => now(),'updated_at' => now()],
            ['nombre'=>'693E','capacidad'=>'100','aulasig'=>'24','planta'=>'4','detalle'=>'null','created_at' => now(),'updated_at' => now()],
            ['nombre'=>'auditorio','capacidad'=>'250','aulasig'=>'0','planta'=>'4','detalle'=>'null','created_at' => now(),'updated_at' => now()],
            //planta baja(edificio industrial)
            ['nombre'=>'631','capacidad'=>'100','aulasig'=>'26','planta'=>'5','detalle'=>'null','created_at' => now(),'updated_at' => now()],
            ['nombre'=>'632','capacidad'=>'120','aulasig'=>'0','planta'=>'5','detalle'=>'null','created_at' => now(),'updated_at' => now()],
            //planta 1
            ['nombre'=>'644','capacidad'=>'40','aulasig'=>'28','planta'=>'6','detalle'=>'null','created_at' => now(),'updated_at' => now()],
            ['nombre'=>'644A','capacidad'=>'45','aulasig'=>'0','planta'=>'6','detalle'=>'null','created_at' => now(),'updated_at' => now()],
            //trencito
            ['nombre'=>'661','capacidad'=>'80','aulasig'=>'30','planta'=>'7','detalle'=>'null','created_at' => now(),'updated_at' => now()],
            ['nombre'=>'662','capacidad'=>'80','aulasig'=>'0','planta'=>'7','detalle'=>'null','created_at' => now(),'updated_at' => now()],
            //planta baja(edificio elektro)
            ['nombre'=>'667A','capacidad'=>'50','aulasig'=>'32','planta'=>'8','detalle'=>'null','created_at' => now(),'updated_at' => now()],
            ['nombre'=>'667B','capacidad'=>'45','aulasig'=>'33','planta'=>'8','detalle'=>'null','created_at' => now(),'updated_at' => now()],
            ['nombre'=>'668','capacidad'=>'50','aulasig'=>'0','planta'=>'8','detalle'=>'null','created_at' => now(),'updated_at' => now()],
            //planta 1(edificio elektro)
            ['nombre'=>'669A','capacidad'=>'70','aulasig'=>'35','planta'=>'9','detalle'=>'null','created_at' => now(),'updated_at' => now()],
            ['nombre'=>'669B','capacidad'=>'60','aulasig'=>'36','planta'=>'9','detalle'=>'null','created_at' => now(),'updated_at' => now()],
            ['nombre'=>'670','capacidad'=>'80','aulasig'=>'0','planta'=>'9','detalle'=>'null','created_at' => now(),'updated_at' => now()],
            //planta 2(edificio elektro)
            ['nombre'=>'671','capacidad'=>'60','aulasig'=>'38','planta'=>'10','detalle'=>'null','created_at' => now(),'updated_at' => now()],
            ['nombre'=>'671A','capacidad'=>'60','aulasig'=>'39','planta'=>'10','detalle'=>'null','created_at' => now(),'updated_at' => now()],
            ['nombre'=>'671B','capacidad'=>'40','aulasig'=>'40','planta'=>'10','detalle'=>'null','created_at' => now(),'updated_at' => now()],
            ['nombre'=>'671C','capacidad'=>'50','aulasig'=>'41','planta'=>'10','detalle'=>'null','created_at' => now(),'updated_at' => now()],
            ['nombre'=>'672','capacidad'=>'70','aulasig'=>'0','planta'=>'10','detalle'=>'null','created_at' => now(),'updated_at' => now()],
            //planta 3(edificio elektro)
            ['nombre'=>'674A','capacidad'=>'50','aulasig'=>'43','planta'=>'11','detalle'=>'null','created_at' => now(),'updated_at' => now()],
            ['nombre'=>'674B','capacidad'=>'40','aulasig'=>'44','planta'=>'11','detalle'=>'null','created_at' => now(),'updated_at' => now()],
            ['nombre'=>'675','capacidad'=>'55','aulasig'=>'0','planta'=>'11','detalle'=>'null','created_at' => now(),'updated_at' => now()],
            //planta baja(edificio antiguo)
            ['nombre'=>'651','capacidad'=>'100','aulasig'=>'46','planta'=>'12','detalle'=>'null','created_at' => now(),'updated_at' => now()],
            ['nombre'=>'652','capacidad'=>'70','aulasig'=>'47','planta'=>'12','detalle'=>'null','created_at' => now(),'updated_at' => now()],
            ['nombre'=>'655','capacidad'=>'40','aulasig'=>'0','planta'=>'12','detalle'=>'null','created_at' => now(),'updated_at' => now()],

        ];
        DB::table('aulas')->insert($data);
    }
}
