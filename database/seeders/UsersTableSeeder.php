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
            'celular' => '67361362',
            'cargo' => '2',
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
            'celular' => '76999935',
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
            'celular' => '65774880',
            'cargo' => '2',
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
            'celular' => '68460139',
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
            'apellidos' => 'Rodriguez Bilbao',
            'nombres' => 'Erika Patricia',
            'ci' => '8028758',
            'expedido' => '3',
            'domicilio' => 'calle final jordan',
            'celular' => '40233719',
            'cargo' => '1',
            'tipo' => '1',
            'email' => 'akirebilbao@gmail.com',
            'password' => Hash::make('secret'),
            'estado' => '1',
            'email_verified_at' => now(),
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('users')->insert([
            'apellidos' => 'Ayoroa Cardozo',
            'nombres' => 'Jose Richard',
            'ci' => '7005431',
            'expedido' => '2',
            'domicilio' => 'calle final papa paulo',
            'celular' => '78610591',
            'cargo' => '1',
            'tipo' => '1',
            'email' => 'richard@correo.com',
            'password' => Hash::make('secret'),
            'estado' => '1',
            'email_verified_at' => now(),
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('users')->insert([
            'apellidos' => 'Calancha Navia',
            'nombres' => 'Boris Marcelo',
            'ci' => '1004965',
            'expedido' => '5',
            'domicilio' => 'calle final uruguay',
            'celular' => '42337190',
            'cargo' => '1',
            'tipo' => '1',
            'email' => 'boris@fcyt.umss.edu.bo',
            'password' => Hash::make('secret'),
            'estado' => '1',
            'email_verified_at' => now(),
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('users')->insert([
            'apellidos' => 'Costas Jáuregui',
            'nombres' => 'Vladimir',
            'ci' => '1462089',
            'expedido' => '8',
            'domicilio' => 'calle benemeritos de la patria',
            'celular' => '68513469',
            'cargo' => '1',
            'tipo' => '1',
            'email' => 'vladimircostas.j@fcyt.umss.edu.bo',
            'password' => Hash::make('secret'),
            'estado' => '1',
            'email_verified_at' => now(),
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('users')->insert([
            'apellidos' => 'Escalera Fernandez',
            'nombres' => 'David',
            'ci' => '4015698',
            'expedido' => '4',
            'domicilio' => 'av. final oquendo ',
            'celular' => '71422401',
            'cargo' => '1',
            'tipo' => '1',
            'email' => 'd.escalera@umss.edu.bo',
            'password' => Hash::make('secret'),
            'estado' => '1',
            'email_verified_at' => now(),
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('users')->insert([
            'apellidos' => 'Jaldin Rosales',
            'nombres' => 'Rolando',
            'ci' => '7041083',
            'expedido' => '6',
            'domicilio' => 'calle final antezana ',
            'celular' => '68540390',
            'cargo' => '1',
            'tipo' => '1',
            'email' => 'rjaldin@hotmail.com',
            'password' => Hash::make('secret'),
            'estado' => '1',
            'email_verified_at' => now(),
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('users')->insert([
            'apellidos' => 'Orellana Araoz',
            'nombres' => 'Jorge Walter',
            'ci' => '1931078',
            'expedido' => '2',
            'domicilio' => 'calle final san martin ',
            'celular' => '69837100',
            'cargo' => '1',
            'tipo' => '1',
            'email' => 'jw.orellana@umss.edu.bo',
            'password' => Hash::make('secret'),
            'estado' => '1',
            'email_verified_at' => now(),
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('users')->insert([
            'apellidos' => 'Romero Rodriguez',
            'nombres' => 'Patricia Elizabeth',
            'ci' => '4710938',
            'expedido' => '9',
            'domicilio' => 'calle final estevan arce ',
            'celular' => '62337191',
            'cargo' => '1',
            'tipo' => '1',
            'email' => 'patriciaromero.r@fcyt.umss.edu.bo',
            'password' => Hash::make('secret'),
            'estado' => '1',
            'email_verified_at' => now(),
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('users')->insert([
            'apellidos' => 'Villarroel Novillo',
            'nombres' => 'Jimmy',
            'ci' => '1031089',
            'expedido' => '1',
            'domicilio' => 'av. final heroinas ',
            'celular' => '76480080',
            'cargo' => '1',
            'tipo' => '1',
            'email' => 'ji.villarroel@umss.edu.bo',
            'password' => Hash::make('secret'),
            'estado' => '1',
            'email_verified_at' => now(),
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('users')->insert([
            'apellidos' => 'Villarroel Tapia',
            'nombres' => 'Henrry Frank',
            'ci' => '8067014',
            'expedido' => '3',
            'domicilio' => 'calle final panamericana ',
            'celular' => '68547930',
            'cargo' => '1',
            'tipo' => '1',
            'email' => 'hvillarroel@memi.umss.edu.bo',
            'password' => Hash::make('secret'),
            'estado' => '1',
            'email_verified_at' => now(),
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('users')->insert([
            'apellidos' => 'Ácha Perez',
            'nombres' => 'Samuel Roberto',
            'ci' => '7401931',
            'expedido' => '5',
            'domicilio' => 'calle final estevan arce ',
            'celular' => '64710897',
            'cargo' => '1',
            'tipo' => '1',
            'email' => 'cibo@supernet.com.bo',
            'password' => Hash::make('secret'),
            'estado' => '1',
            'email_verified_at' => now(),
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('users')->insert([
            'apellidos' => 'Agreda Corrales',
            'nombres' => 'Luis Roberto',
            'ci' => '3124795',
            'expedido' => '8',
            'domicilio' => 'calle final antezana ',
            'celular' => '74529557',
            'cargo' => '1',
            'tipo' => '1',
            'email' => 'luisagreda@hotmail.com',
            'password' => Hash::make('secret'),
            'estado' => '1',
            'email_verified_at' => now(),
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('users')->insert([
            'apellidos' => 'Antezana Camacho',
            'nombres' => 'Marcelo',
            'ci' => '6410897',
            'expedido' => '2',
            'domicilio' => 'calle final ladislao cabrera',
            'celular' => '68369010',
            'cargo' => '1',
            'tipo' => '1',
            'email' => 'marcelo@antezana.com',
            'password' => Hash::make('secret'),
            'estado' => '1',
            'email_verified_at' => now(),
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('users')->insert([
            'apellidos' => 'Aparicio Yuja',
            'nombres' => 'Tatiana',
            'ci' => '5438901',
            'expedido' => '6',
            'domicilio' => 'calle final panamericana ',
            'celular' => '76104891',
            'cargo' => '1',
            'tipo' => '1',
            'email' => 'aparicio@ucbcba.edu.bo',
            'password' => Hash::make('secret'),
            'estado' => '1',
            'email_verified_at' => now(),
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('users')->insert([
            'apellidos' => 'Aranibar La Fuente',
            'nombres' => 'Ligia Jacqueline',
            'ci' => '7084390',
            'expedido' => '3',
            'domicilio' => 'calle final german busch',
            'celular' => '76804391',
            'cargo' => '1',
            'tipo' => '1',
            'email' => 'ligiajacqueline@hotmail.com',
            'password' => Hash::make('secret'),
            'estado' => '1',
            'email_verified_at' => now(),
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('users')->insert([
            'apellidos' => 'Arispe Santander',
            'nombres' => 'Walter',
            'ci' => '4038971',
            'expedido' => '9',
            'domicilio' => 'calle final panamericana',
            'celular' => '70318964',
            'cargo' => '1',
            'tipo' => '1',
            'email' => 'santander@hotmail.com',
            'password' => Hash::make('secret'),
            'estado' => '1',
            'email_verified_at' => now(),
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('users')->insert([
            'apellidos' => 'Blanco Coca',
            'nombres' => 'Maria Leticia',
            'ci' => '4198703',
            'expedido' => '5',
            'domicilio' => 'calle final jordan',
            'celular' => '74254398',
            'cargo' => '1',
            'tipo' => '1',
            'email' => 'leticia@memi.umss.edu.bo',
            'password' => Hash::make('secret'),
            'estado' => '1',
            'email_verified_at' => now(),
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('users')->insert([
            'apellidos' => 'Bustillos Vargas',
            'nombres' => 'Alex Israel',
            'ci' => '4697890',
            'expedido' => '7',
            'domicilio' => 'calle final  ',
            'celular' => '73450109',
            'cargo' => '1',
            'tipo' => '1',
            'email' => 'bustillos@hotmail.com',
            'password' => Hash::make('secret'),
            'estado' => '1',
            'email_verified_at' => now(),
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('users')->insert([
            'apellidos' => 'Camacho del Castillo',
            'nombres' => 'Indira Elva',
            'ci' => '5014698',
            'expedido' => '9',
            'domicilio' => 'av final oquendo',
            'celular' => '64229535',
            'cargo' => '1',
            'tipo' => '1',
            'email' => 'agofru@gmail.com',
            'password' => Hash::make('secret'),
            'estado' => '1',
            'email_verified_at' => now(),
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('users')->insert([
            'apellidos' => 'Grover Cussi',
            'nombres' => 'Nicolas',
            'ci' => '3657091',
            'expedido' => '1',
            'domicilio' => 'calle final estevan arce ',
            'celular' => '76408977',
            'cargo' => '1',
            'tipo' => '1',
            'email' => 'gcussi@yahoo.com',
            'password' => Hash::make('secret'),
            'estado' => '1',
            'email_verified_at' => now(),
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('users')->insert([
            'apellidos' => 'Flores Villarroel',
            'nombres' => 'Corina Justina',
            'ci' => '4698301',
            'expedido' => '6',
            'domicilio' => 'calle final jordan',
            'celular' => '74698301',
            'cargo' => '1',
            'tipo' => '1',
            'email' => 'corina@memi.umss.edu.bo',
            'password' => Hash::make('secret'),
            'estado' => '1',
            'email_verified_at' => now(),
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('users')->insert([
            'apellidos' => 'Garcia Perez',
            'nombres' => 'Carmen Rosa',
            'ci' => '4769830',
            'expedido' => '1',
            'domicilio' => 'av final 6 de agosto',
            'celular' => '74101471',
            'cargo' => '1',
            'tipo' => '1',
            'email' => 'carmengarcia.p@fcyt.umss.edu.bo',
            'password' => Hash::make('secret'),
            'estado' => '1',
            'email_verified_at' => now(),
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('users')->insert([
            'apellidos' => 'Montaño Quiroga',
            'nombres' => 'Victor Hugo',
            'ci' => '9018647',
            'expedido' => '6',
            'domicilio' => 'av final blanco galindo  ',
            'celular' => '60605912',
            'cargo' => '1',
            'tipo' => '1',
            'email' => 'victor_hugo_montano@hotmail.com',
            'password' => Hash::make('secret'),
            'estado' => '1',
            'email_verified_at' => now(),
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('users')->insert([
            'apellidos' => 'Montecinos Choque',
            'nombres' => 'Marco Antonio',
            'ci' => '9310891',
            'expedido' => '4',
            'domicilio' => 'calle final calama',
            'celular' => '76900777',
            'cargo' => '1',
            'tipo' => '1',
            'email' => 'markmcbo@gmail.com',
            'password' => Hash::make('secret'),
            'estado' => '1',
            'email_verified_at' => now(),
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('users')->insert([
            'apellidos' => 'Montoya Burgos',
            'nombres' => 'Yony Richard',
            'ci' => '8016390',
            'expedido' => '5',
            'domicilio' => 'calle final Luis Pasteur',
            'celular' => '71725138',
            'cargo' => '1',
            'tipo' => '1',
            'email' => 'yony@setbol.net',
            'password' => Hash::make('secret'),
            'estado' => '1',
            'email_verified_at' => now(),
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('users')->insert([
            'apellidos' => 'Torrico Bascopé',
            'nombres' => 'Rosemary',
            'ci' => '8707891',
            'expedido' => '1',
            'domicilio' => 'calle final jordan',
            'celular' => '71778384',
            'cargo' => '1',
            'tipo' => '1',
            'email' => 'rosemary@cs.umss.edu.bo',
            'password' => Hash::make('secret'),
            'estado' => '1',
            'email_verified_at' => now(),
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('users')->insert([
            'apellidos' => 'Salazar Serrudo',
            'nombres' => 'Carla',
            'ci' => '6019374',
            'expedido' => '9',
            'domicilio' => 'calle final panamericana',
            'celular' => '67091811',
            'cargo' => '1',
            'tipo' => '1',
            'email' => 'csalazar@memi.umss.edu.bo',
            'password' => Hash::make('secret'),
            'estado' => '1',
            'email_verified_at' => now(),
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('users')->insert([
            'apellidos' => 'Ustariz Vargas',
            'nombres' => 'Hernan',
            'ci' => '1048960',
            'expedido' => '5',
            'domicilio' => 'calle final antezana',
            'celular' => '65097199',
            'cargo' => '1',
            'tipo' => '1',
            'email' => 'hustariz@memi.umss.edu.bo',
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
