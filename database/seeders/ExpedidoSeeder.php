<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class ExpedidoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data=[
            ['lugar'=>'cochabamba','created_at' => now(),'updated_at' => now()],
            ['lugar'=>'La paz','created_at' => now(),'updated_at' => now()],
            ['lugar'=>'Santa Cruz','created_at' => now(),'updated_at' => now()],
            ['lugar'=>'Beni','created_at' => now(),'updated_at' => now()],
            ['lugar'=>'Chuquisaca','created_at' => now(),'updated_at' => now()],
            ['lugar'=>'Oruro','created_at' => now(),'updated_at' => now()],
            ['lugar'=>'Pando','created_at' => now(),'updated_at' => now()],
            ['lugar'=>'Tarija','created_at' => now(),'updated_at' => now()],
            ['lugar'=>'potosi','created_at' => now(),'updated_at' => now()],
        ];
        DB::table('expedidos')->insert($data);
    }
}
