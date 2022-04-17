<?php
namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('users')->insert([
            'apellidos' => 'Velasco Ustariz',
            'nombres' => 'Erick Vladimir',
            'ci' => '8025458',
            'expedido' => '2',
            'domicilio' => 'calle final sucre',
            'celular' => '77777777',
            'cargo' => '1',
            'tipo' => '1',
            'email' => 'erick@sitic.com',
            'password' => Hash::make('secret'),
            'estado' => '1',
            'email_verified_at' => now(),
            'created_at' => now(),
            'updated_at' => now()
        ]);







    }
}
