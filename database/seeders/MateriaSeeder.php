<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class MateriaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data=[
            //erick
            ['descripcion'=>'Introducción a la Programación','departamento'=>'Departamento de Informatica y Sistemas','created_at' => now(),'updated_at' => now()],
            ['descripcion'=>'Elementos de Programación Estructura de Datos','departamento'=>'Departamento de Informatica y Sistemas','created_at' => now(),'updated_at' => now()],
            ['descripcion'=>'Base de Datos I','departamento'=>'Departamento de Informatica y Sistemas','created_at' => now(),'updated_at' => now()],
            ['descripcion'=>'Base de Datos II','departamento'=>'Departamento de Informatica y Sistemas','created_at' => now(),'updated_at' => now()],
            ['descripcion'=>'Sistemas de Información I','departamento'=>'Departamento de Informatica y Sistemas','created_at' => now(),'updated_at' => now()],

            ['descripcion'=>'Aplicacion de Sistemas Operativos','departamento'=>'Departamento de Informatica y Sistemas','created_at' => now(),'updated_at' => now()],

            ['descripcion'=>'Estadistica II','departamento'=>'industrial','created_at' => now(),'updated_at' => now()],
            //nuevas materias
            ['descripcion'=>'Proyecto final','departamento'=>'Departamento de Informatica y Sistemas','created_at' => now(),'updated_at' => now()],
            ['descripcion'=>'Taller de simulacion de sistemas','departamento'=>'Departamento de Informatica y Sistemas','created_at' => now(),'updated_at' => now()],
            ['descripcion'=>'Taller de Base de Datos','departamento'=>'Departamento de Informatica y Sistemas','created_at' => now(),'updated_at' => now()],
            ['descripcion'=>'Date Warehouse','departamento'=>'Departamento de Informatica y Sistemas','created_at' => now(),'updated_at' => now()],
            ['descripcion'=>'Graficacion por Computadora','departamento'=>'Departamento de Informatica y Sistemas','created_at' => now(),'updated_at' => now()],

            ['descripcion'=>'Metodos,Tecnicas y Taller de Programación','departamento'=>'Departamento de Informatica y Sistemas','created_at' => now(),'updated_at' => now()],
            ['descripcion'=>'Programación Web','departamento'=>'Departamento de Informatica y Sistemas','created_at' => now(),'updated_at' => now()],
            ['descripcion'=>'Taller de Ingenieria de Software','departamento'=>'Departamento de Informatica y Sistemas','created_at' => now(),'updated_at' => now()],
            ['descripcion'=>'Sistemas de Informacion II','departamento'=>'Departamento de Informatica y Sistemas','created_at' => now(),'updated_at' => now()],
            ['descripcion'=>'Metodología y Planificación de Proyecto de Grado','departamento'=>'Departamento de Informatica y Sistemas','created_at' => now(),'updated_at' => now()],
            ['descripcion'=>'Redes de Computadoras','departamento'=>'Departamento de Informatica y Sistemas','created_at' => now(),'updated_at' => now()],
            ['descripcion'=>'Taller de Sistemas Operativos','departamento'=>'Departamento de Informatica y Sistemas','created_at' => now(),'updated_at' => now()],
            ['descripcion'=>'Dinamica de Sistemas','departamento'=>'sistemas','created_at' => now(),'updated_at' => now()],
            ['descripcion'=>'Aplicacion Interactiva para Televisión Digital','departamento'=>'Departamento de Informatica y Sistemas','created_at' => now(),'updated_at' => now()],
            ['descripcion'=>'Estructura y Semantica de Lenguajes de Programación','departamento'=>'Departamento de Informatica y Sistemas','created_at' => now(),'updated_at' => now()],
            ['descripcion'=>'Evaluación y Auditoria de Sistemas','departamento'=>'Departamento de Informatica y Sistemas','created_at' => now(),'updated_at' => now()],
            ['descripcion'=>'Taller de Grado I','departamento'=>'Departamento de Informatica y Sistemas','created_at' => now(),'updated_at' => now()],
            ['descripcion'=>'Taller de Grado II','departamento'=>'Departamento de Informatica y Sistemas','created_at' => now(),'updated_at' => now()],
            ['descripcion'=>'Metodologia de la Investigación y Técnicas de Comunicación','departamento'=>'Departamento de Informatica y Sistemas','created_at' => now(),'updated_at' => now()],
            ['descripcion'=>'Aplicaciones Web Avanzadas','departamento'=>'Departamento de Informatica y Sistemas','created_at' => now(),'updated_at' => now()],
            ['descripcion'=>'Simulación de Sistemas','departamento'=>'Departamento de Informatica y Sistemas','created_at' => now(),'updated_at' => now()],
            ['descripcion'=>'Electroctecnia Industrial','departamento'=>'industrial','created_at' => now(),'updated_at' => now()],
            ['descripcion'=>'Arquitectura de Computadoras I','departamento'=>'Departamento de Informatica y Sistemas','created_at' => now(),'updated_at' => now()],
            ['descripcion'=>'Arquitectura de Computadoras II','departamento'=>'Departamento de Informatica y Sistemas','created_at' => now(),'updated_at' => now()],
            ['descripcion'=>'Informatica Forense','departamento'=>'Departamento de Informatica y Sistemas','created_at' => now(),'updated_at' => now()],
            ['descripcion'=>'Programación Funcional','departamento'=>'Departamento de Informatica y Sistemas','created_at' => now(),'updated_at' => now()],
            ['descripcion'=>'Ingeniería Económica','departamento'=>'Departamento de Informatica y Sistemas','created_at' => now(),'updated_at' => now()],
            ['descripcion'=>'Contabilidad Basica','departamento'=>'Departamento de Informatica y Sistemas','created_at' => now(),'updated_at' => now()],
            ['descripcion'=>'Algoritmos Avanzados','departamento'=>'Departamento de Informatica y Sistemas','created_at' => now(),'updated_at' => now()],
            ['descripcion'=>'Calculo II','departamento'=>'matematicas','created_at' => now(),'updated_at' => now()],
            ['descripcion'=>'Ingeniería de Software','departamento'=>'Departamento de Informatica y Sistemas','created_at' => now(),'updated_at' => now()],
            ['descripcion'=>'Organización y Métodos','departamento'=>'Departamento de Informatica y Sistemas','created_at' => now(),'updated_at' => now()],
            ['descripcion'=>'Métodos y Técnicas de Programación','departamento'=>'Departamento de Informatica y Sistemas','created_at' => now(),'updated_at' => now()],
            ['descripcion'=>'Interaccion Humano Computador','departamento'=>'Departamento de Informatica y Sistemas','created_at' => now(),'updated_at' => now()],
            ['descripcion'=>'Inteligencia Artificial II','departamento'=>'Departamento de Informatica y Sistemas','created_at' => now(),'updated_at' => now()],
            ['descripcion'=>'Inteligencia Artificial I','departamento'=>'Departamento de Informatica y Sistemas','created_at' => now(),'updated_at' => now()],
            ['descripcion'=>'Reconocimiento de Voz','departamento'=>'Departamento de Informatica y Sistemas','created_at' => now(),'updated_at' => now()],
            ['descripcion'=>'Robótica','departamento'=>'Departamento de Informatica y Sistemas','created_at' => now(),'updated_at' => now()],
            ['descripcion'=>'Proyecto Final','departamento'=>'Departamento de Informatica y Sistemas','created_at' => now(),'updated_at' => now()],
            ['descripcion'=>'Teoria de Autómatas y Lenguajes Formales','departamento'=>'Departamento de Informatica y Sistemas','created_at' => now(),'updated_at' => now()],
            ['descripcion'=>'Taller de Programación de Bajo Nivel','departamento'=>'Departamento de Informatica y Sistemas','created_at' => now(),'updated_at' => now()],
            ['descripcion'=>'Tecnología de Redes Avanzadas','departamento'=>'Departamento de Informatica y Sistemas','created_at' => now(),'updated_at' => now()],
            ['descripcion'=>'Redes Avanzadas de Computadoras','departamento'=>'Departamento de Informatica y Sistemas','created_at' => now(),'updated_at' => now()],
            ['descripcion'=>'Teoría de Grafos','departamento'=>'Departamento de Informatica y Sistemas','created_at' => now(),'updated_at' => now()],
            ['descripcion'=>'Telefonía IP','departamento'=>'Departamento de Informatica y Sistemas','created_at' => now(),'updated_at' => now()],
            ['descripcion'=>'Técnicas de Ruteo Avanzado','departamento'=>'Departamento de Informatica y Sistemas','created_at' => now(),'updated_at' => now()],
            ['descripcion'=>'Administracion de Servidores Internet','departamento'=>'Departamento de Informatica y Sistemas','created_at' => now(),'updated_at' => now()],
            ['descripcion'=>'Redes de Nueva Generación','departamento'=>'Departamento de Informatica y Sistemas','created_at' => now(),'updated_at' => now()],
            ['descripcion'=>'Programación','departamento'=>'Departamento de Informatica y Sistemas','created_at' => now(),'updated_at' => now()],
            ['descripcion'=>'Sistemas de Información II','departamento'=>'Departamento de Informatica y Sistemas','created_at' => now(),'updated_at' => now()],
            ['descripcion'=>'Computacion','departamento'=>'industrial','created_at' => now(),'updated_at' => now()],
        ];
        DB::table('materias')->insert($data);
    }
}
