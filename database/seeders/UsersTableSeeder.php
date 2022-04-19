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
            'apellidos' => 'Admin',
            'nombres' => 'Admin',
            'ci' => '245664',
            'expedido' => '1',
            'domicilio' => '',
            'celular' => null,
            'cargo' => '3',
            'tipo' => '2',
            'email' => 'admin@sitic.com',
            'password' => Hash::make('secret'),
            'estado' => '1',
            'email_verified_at' => now(),
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('users')->insert([
            'apellidos' => 'Velasco Ustariz',
            'nombres' => 'Erick Vladimir',
            'ci' => '8025458',
            'expedido' => '3',
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

        DB::table('users')->insert([
            'apellidos' => 'Choque Humana',
            'nombres' => 'Yasmani',
            'ci' => '8006739',
            'expedido' => '5',
            'domicilio' => 'calle eucaliptos',
            'celular' => '77143219',
            'cargo' => '2',
            'tipo' => '1',
            'email' => 'yasmani@sitic.com',
            'password' => Hash::make('secret'),
            'estado' => '1',
            'email_verified_at' => now(),
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('users')->insert([
            'apellidos' => 'Torrez Gozalvez',
            'nombres' => 'Patricia Alejandra',
            'ci' => '7064387',
            'expedido' => '4',
            'domicilio' => 'calle final ayacucho',
            'celular' => '77548631',
            'cargo' => '3',
            'tipo' => '1',
            'email' => 'alejandra@sitic.com',
            'password' => Hash::make('secret'),
             'estado' => '1',
            'email_verified_at' => now(),
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('users')->insert([
            'apellidos' => 'Chuquimia Arcangel',
            'nombres' => 'Einar Jarol',
            'ci' => '8028458',
            'expedido' => '3',
            'domicilio' => 'calle final jordan',
            'celular' => '73578100',
            'cargo' => '2',
            'tipo' => '1',
            'email' => 'einar@sitic.com',
            'password' => Hash::make('secret'),
            'estado' => '1',
            'email_verified_at' => now(),
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('users')->insert([
            'apellidos' => 'Sahonero Pereira',
            'nombres' => 'Giovani',
            'ci' => '8023458',
            'expedido' => '5',
            'domicilio' => 'calle final antezana',
            'celular' => '76523094',
            'cargo' => '2',
            'tipo' => '1',
            'email' => 'giovani@gmail.com',
            'password' => Hash::make('secret'),
            'estado' => '1',
            'email_verified_at' => now(),
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('users')->insert([
            'apellidos' => 'Geronimo Soliz',
            'nombres' => 'Jhonathan',
            'ci' => '80251458',
            'expedido' => '5',
            'domicilio' => 'calle final lanza',
            'celular' => '76543087',
            'cargo' => '3',
            'tipo' => '1',
            'email' => 'jhonathan@gmail.com',
            'password' => Hash::make('secret'),
            'estado' => '1',
            'email_verified_at' => now(),
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('users')->insert([
            'apellidos' => 'Uturunku Mamani',
            'nombres' => 'Hernan',
            'ci' => '4215458',
            'expedido' => '4',
            'domicilio' => 'calle final aroma',
            'celular' => '76413573',
            'cargo' => '4',
            'tipo' => '1',
            'email' => 'hernan@gmail.com',
            'password' => Hash::make('secret'),
            'estado' => '1',
            'email_verified_at' => now(),
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('users')->insert([
            'apellidos' => 'Alarcon Gutierrez',
            'nombres' => 'Freddy',
            'ci' => '8041064',
            'expedido' => '3',
            'domicilio' => 'calle final san martin',
            'celular' => '68515321',
            'cargo' => '3',
            'tipo' => '1',
            'email' => 'freddy@gmail.com',
            'password' => Hash::make('secret'),
            'estado' => '1',
            'email_verified_at' => now(),
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('users')->insert([
            'apellidos' => 'Pinto Rojas',
            'nombres' => 'Henry',
            'ci' => '8025149',
            'expedido' => '3',
            'domicilio' => 'calle final oquendo',
            'celular' => '76495521',
            'cargo' => '3',
            'tipo' => '1',
            'email' => 'henry@gmail.com',
            'password' => Hash::make('secret'),
            'estado' => '1',
            'email_verified_at' => now(),
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('users')->insert([
            'apellidos' => 'Salvatierra Gutierrez',
            'nombres' => 'Ariel',
            'ci' => '8022158',
            'expedido' => '4',
            'domicilio' => 'calle final 6 de agosto',
            'celular' => '78631231',
            'cargo' => '3',
            'tipo' => '1',
            'email' => 'ariel@gmail.com',
            'password' => Hash::make('secret'),
            'estado' => '1',
            'email_verified_at' => now(),
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('users')->insert([
            'apellidos' => 'Rojas Martinez',
            'nombres' => 'Miguel',
            'ci' => '8043758',
            'expedido' => '3',
            'domicilio' => 'calle final Benemeritos',
            'celular' => '76548831',
            'cargo' => '2',
            'tipo' => '1',
            'email' => 'miguel@gmail.com',
            'password' => Hash::make('secret'),
             'estado' => '1',
            'email_verified_at' => now(),
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('users')->insert([
            'apellidos' => 'Caceres Rojas',
            'nombres' => 'Julio Cesar',
            'ci' => '80254232',
            'expedido' => '3',
            'domicilio' => 'calle final comercio',
            'celular' => '76432154',
            'cargo' => '4',
            'tipo' => '1',
            'email' => 'julio@gmail.com',
            'password' => Hash::make('secret'),
            'estado' => '1',
            'email_verified_at' => now(),
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('users')->insert([
            'apellidos' => 'Ayma',
            'nombres' => 'Sabina',
            'ci' => '8022150',
            'expedido' => '3',
            'domicilio' => 'calle final lanza',
            'celular' => '76421109',
            'cargo' => '3',
            'tipo' => '1',
            'email' => 'sabina@gmail.com',
            'password' => Hash::make('secret'),
            'estado' => '1',
            'email_verified_at' => now(),
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('users')->insert([
            'apellidos' => 'Gutierrez Rojas',
            'nombres' => 'Lucero',
            'ci' => '8025641',
            'expedido' => '3',
            'domicilio' => 'calle final oquendo',
            'celular' => '76432709',
            'cargo' => '4',
            'tipo' => '1',
            'email' => 'lucero@gmail.com',
            'password' => Hash::make('secret'),
            'estado' => '1',
            'email_verified_at' => now(),
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('users')->insert([
            'apellidos' => 'Vargas Huanaco',
            'nombres' => 'Erwin',
            'ci' => '8028875',
            'expedido' => '3',
            'domicilio' => 'av. simon lopez #144',
            'celular' => '77334457',
            'cargo' => '2',
            'tipo' => '1',
            'email' => 'erwin@gmail.com',
            'password' => Hash::make('secret'),
            'estado' => '1',
            'email_verified_at' => now(),
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('users')->insert([
            'apellidos' => 'Tapia Villarroel',
            'nombres' => 'Maria Ines',
            'ci' => '7718875',
            'expedido' => '3',
            'domicilio' => 'av. German Busch #123',
            'celular' => '67550457',
            'cargo' => '2',
            'tipo' => '1',
            'email' => 'maria@gmail.com',
            'password' => Hash::make('secret'),
            'estado' => '1',
            'email_verified_at' => now(),
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('users')->insert([
            'apellidos' => 'Candia Sejas',
            'nombres' => 'Carlos',
            'ci' => '42226431',
            'expedido' => '3',
            'domicilio' => 'av. Blanco Galindo km 3 #67',
            'celular' => '62120440',
            'cargo' => '3',
            'tipo' => '1',
            'email' => 'carlos@gmail.com',
            'password' => Hash::make('secret'),
            'estado' => '1',
            'email_verified_at' => now(),
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('users')->insert([
            'apellidos' => 'Gonzales Crespo',
            'nombres' => 'Antonio',
            'ci' => '1014382',
            'expedido' => '3',
            'domicilio' => 'av. Blanco Galindo km 5 #30',
            'celular' => '76493002',
            'cargo' => '3',
            'tipo' => '1',
            'email' => 'antonio@gmail.com',
            'password' => Hash::make('secret'),
            'estado' => '1',
            'email_verified_at' => now(),
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('users')->insert([
            'apellidos' => 'Candia Sejas',
            'nombres' => 'Roberto',
            'ci' => '1123431',
            'expedido' => '5',
            'domicilio' => 'av. Blanco Galindo km 4 #70',
            'celular' => '65230448',
            'cargo' => '2',
            'tipo' => '1',
            'email' => 'roberto@gmail.com',
            'password' => Hash::make('secret'),
            'estado' => '1',
            'email_verified_at' => now(),
            'created_at' => now(),
            'updated_at' => now()
        ]);
    }
}
