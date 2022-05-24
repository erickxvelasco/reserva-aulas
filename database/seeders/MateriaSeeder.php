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
            ['descripcion'=>'Introducción a la Programación','departamento'=>'sistemas','created_at' => now(),'updated_at' => now()],
            ['descripcion'=>'Elementos de Programación Estructura de Datos','departamento'=>'sistemas','created_at' => now(),'updated_at' => now()],
            ['descripcion'=>'Base de Datos I','departamento'=>'sistemas','created_at' => now(),'updated_at' => now()],
            ['descripcion'=>'Base de Datos II','departamento'=>'sistemas','created_at' => now(),'updated_at' => now()],
            ['descripcion'=>'Sistemas de Información I','departamento'=>'sistemas','created_at' => now(),'updated_at' => now()],

            //yasmani
            ['descripcion'=>'Estadistica I','departamento'=>'industrial','created_at' => now(),'updated_at' => now()],
            ['descripcion'=>'Introducción a la Programación','departamento'=>'sistemas','created_at' => now(),'updated_at' => now()],
            ['descripcion'=>'Base de Datos I','departamento'=>'sistemas','created_at' => now(),'updated_at' => now()],
            ['descripcion'=>'Aplicacion de Sistemas Operativos','departamento'=>'sistemas','created_at' => now(),'updated_at' => now()],

            //patricia
            ['descripcion'=>'Introducción a la Programación','departamento'=>'sistemas','created_at' => now(),'updated_at' => now()],
            ['descripcion'=>'Elementos de Programación Estructura de Datos','departamento'=>'sistemas','created_at' => now(),'updated_at' => now()],
            ['descripcion'=>'Base de Datos I','departamento'=>'sistemas','created_at' => now(),'updated_at' => now()],
            ['descripcion'=>'Base de Datos II','departamento'=>'sistemas','created_at' => now(),'updated_at' => now()],
            ['descripcion'=>'Estadistica II','departamento'=>'industrial','created_at' => now(),'updated_at' => now()],

            //einar
            ['descripcion'=>'Introducción a la Programación','departamento'=>'sistemas','created_at' => now(),'updated_at' => now()],
            ['descripcion'=>'Elementos de Programación Estructura de Datos','departamento'=>'sistemas','created_at' => now(),'updated_at' => now()],
            ['descripcion'=>'Base de Datos II','departamento'=>'sistemas','created_at' => now(),'updated_at' => now()],
            ['descripcion'=>'Sistemas de Información I','departamento'=>'sistemas','created_at' => now(),'updated_at' => now()],


            //nuevas materias
            ['descripcion'=>'Aplicación de Sistemas Operativos','departamento'=>'sistemas','created_at' => now(),'updated_at' => now()],
            ['descripcion'=>'Proyecto final','departamento'=>'sistemas','created_at' => now(),'updated_at' => now()],
            ['descripcion'=>'Taller de simulacion de sistemas','departamento'=>'sistemas','created_at' => now(),'updated_at' => now()],

            ['descripcion'=>'Base de Datos I','departamento'=>'sistemas','created_at' => now(),'updated_at' => now()],
            ['descripcion'=>'Taller de Base de Datos','departamento'=>'sistemas','created_at' => now(),'updated_at' => now()],
            ['descripcion'=>'Taller de Base de Datos','departamento'=>'sistemas','created_at' => now(),'updated_at' => now()],
            ['descripcion'=>'Date Warehouse','departamento'=>'sistemas','created_at' => now(),'updated_at' => now()],
            ['descripcion'=>'Graficacion por Computadora','departamento'=>'informática','created_at' => now(),'updated_at' => now()],

            ['descripcion'=>'Metodos,Tecnicas y Taller de Programación','departamento'=>'sistemas','created_at' => now(),'updated_at' => now()],
            ['descripcion'=>'Introduccion a la Programación','departamento'=>'sistemas','created_at' => now(),'updated_at' => now()],
            ['descripcion'=>'Programación Web','departamento'=>'informática','created_at' => now(),'updated_at' => now()],

            ['descripcion'=>'Taller de Ingenieria de Software','departamento'=>'sistemas','created_at' => now(),'updated_at' => now()],

            ['descripcion'=>'Sistemas de Informacion II','departamento'=>'sistemas','created_at' => now(),'updated_at' => now()],
            ['descripcion'=>'Metodología y Planificación de Proyecto de Grado','departamento'=>'sistemas','created_at' => now(),'updated_at' => now()],

            ['descripcion'=>'Redes de Computadoras','departamento'=>'sistemas','created_at' => now(),'updated_at' => now()],
            ['descripcion'=>'Redes de Computadoras','departamento'=>'sistemas','created_at' => now(),'updated_at' => now()],
            ['descripcion'=>'Taller de Sistemas Operativos','departamento'=>'sistemas','created_at' => now(),'updated_at' => now()],
            ['descripcion'=>'Taller de Sistemas Operativos','departamento'=>'sistemas','created_at' => now(),'updated_at' => now()],
            ['descripcion'=>'Metodología y Planificación de Proyecto de Grado','departamento'=>'sistemas','created_at' => now(),'updated_at' => now()],
            ['descripcion'=>'Dinamica de Sistemas','departamento'=>'sistemas','created_at' => now(),'updated_at' => now()],
            ['descripcion'=>'Aplicacion Interactiva para Televisión Digital','departamento'=>'sistemas','created_at' => now(),'updated_at' => now()],

            ['descripcion'=>'Estructura y Semantica de Lenguajes de Programación','departamento'=>'informática','created_at' => now(),'updated_at' => now()],
            ['descripcion'=>'Evaluación y Auditoria de Sistemas','departamento'=>'sistemas','created_at' => now(),'updated_at' => now()],
            ['descripcion'=>'Proyecto Final','departamento'=>'sistemas','created_at' => now(),'updated_at' => now()],
            ['descripcion'=>'Taller de Grado I','departamento'=>'informática','created_at' => now(),'updated_at' => now()],
            ['descripcion'=>'Taller de Grado II','departamento'=>'informática','created_at' => now(),'updated_at' => now()],
            ['descripcion'=>'Metodologia de la Investigación y Técnicas de Comunicación','departamento'=>'sistemas','created_at' => now(),'updated_at' => now()],

            ['descripcion'=>'Evaluacion y Auditoria de Sistemas','departamento'=>'sistemas','created_at' => now(),'updated_at' => now()],
            ['descripcion'=>'Aplicaciones Web Avanzadas','departamento'=>'informática','created_at' => now(),'updated_at' => now()],
            ['descripcion'=>'Metodos,Tecnicas y Taller de Programación','departamento'=>'sistemas','created_at' => now(),'updated_at' => now()],
            ['descripcion'=>'Metodologia de la Investigación y Técnicas de Comunicación','departamento'=>'sistemas','created_at' => now(),'updated_at' => now()],

            ['descripcion'=>'Simulación de Sistemas','departamento'=>'sistemas','created_at' => now(),'updated_at' => now()],
            ['descripcion'=>'Simulación de Sistemas','departamento'=>'sistemas','created_at' => now(),'updated_at' => now()],
            ['descripcion'=>'Taller de Simulacion de Sistemas','departamento'=>'sistemas','created_at' => now(),'updated_at' => now()],
            ['descripcion'=>'Introduccion a la Programación','departamento'=>'sistemas','created_at' => now(),'updated_at' => now()],
            ['descripcion'=>'Metodología y Planificación de Proyecto de Grado','departamento'=>'sistemas','created_at' => now(),'updated_at' => now()],

            ['descripcion'=>'Arquitectura de Computadoras I','departamento'=>'sistemas','created_at' => now(),'updated_at' => now()],
            ['descripcion'=>'Electroctecnia Industrial','departamento'=>'industrial','created_at' => now(),'updated_at' => now()],

            ['descripcion'=>'Arquitectura de Computadoras I','departamento'=>'sistemas','created_at' => now(),'updated_at' => now()],
            ['descripcion'=>'Arquitectura de Computadoras II','departamento'=>'sistemas','created_at' => now(),'updated_at' => now()],

            ['descripcion'=>'Informatica Forense','departamento'=>'sistemas','created_at' => now(),'updated_at' => now()],

            ['descripcion'=>'Base de Datos II','departamento'=>'sistemas','created_at' => now(),'updated_at' => now()],
            ['descripcion'=>'Base de Datos II','departamento'=>'sistemas','created_at' => now(),'updated_at' => now()],
            ['descripcion'=>'Programación Funcional','departamento'=>'informática','created_at' => now(),'updated_at' => now()],

            ['descripcion'=>'Ingeniería Económica','departamento'=>'sistemas','created_at' => now(),'updated_at' => now()],
            ['descripcion'=>'Contabilidad Basica','departamento'=>'sistemas','created_at' => now(),'updated_at' => now()],

            ['descripcion'=>'Electrotecnia Industrial','departamento'=>'industrial','created_at' => now(),'updated_at' => now()],

            ['descripcion'=>'Elementos de Programación y Estructura de Datos','departamento'=>'sistemas','created_at' => now(),'updated_at' => now()],
            ['descripcion'=>'Elementos de Programación y Estructura de Datos','departamento'=>'sistemas','created_at' => now(),'updated_at' => now()],
            ['descripcion'=>'Introduccion a la Programación','departamento'=>'sistemas','created_at' => now(),'updated_at' => now()],
            ['descripcion'=>'Taller de Ingenieria de Software','departamento'=>'sistemas','created_at' => now(),'updated_at' => now()],
            ['descripcion'=>'Algoritmos Avanzados','departamento'=>'informática','created_at' => now(),'updated_at' => now()],
            ['descripcion'=>'Arquitectura de Computadoras I','departamento'=>'sistemas','created_at' => now(),'updated_at' => now()],

            ['descripcion'=>'Calculo II','departamento'=>'matematicas','created_at' => now(),'updated_at' => now()],

            ['descripcion'=>'Ingeniería de Software','departamento'=>'sistemas','created_at' => now(),'updated_at' => now()],
            ['descripcion'=>'Organización y Métodos','departamento'=>'informática','created_at' => now(),'updated_at' => now()],

            ['descripcion'=>'Taller de Sistemas Operativos','departamento'=>'sistemas','created_at' => now(),'updated_at' => now()],
            ['descripcion'=>'Aplicación de Sistemas Operativos','departamento'=>'sistemas','created_at' => now(),'updated_at' => now()],
            ['descripcion'=>'Aplicación de Sistemas Operativos','departamento'=>'sistemas','created_at' => now(),'updated_at' => now()],

            ['descripcion'=>'Introduccion a la Programación','departamento'=>'sistemas','created_at' => now(),'updated_at' => now()],
            ['descripcion'=>'Metodos,Tecnicas y Taller de Programación','departamento'=>'sistemas','created_at' => now(),'updated_at' => now()],
            ['descripcion'=>'Taller de Ingenieria de Software','departamento'=>'sistemas','created_at' => now(),'updated_at' => now()],
            ['descripcion'=>'Taller de Grado I','departamento'=>'informática','created_at' => now(),'updated_at' => now()],
            ['descripcion'=>'Métodos y Técnicas de Programación','departamento'=>'informática','created_at' => now(),'updated_at' => now()],
            ['descripcion'=>'Interaccion Humano Computador','departamento'=>'informática','created_at' => now(),'updated_at' => now()],

            ['descripcion'=>'Inteligencia Artificial II','departamento'=>'sistemas','created_at' => now(),'updated_at' => now()],
            ['descripcion'=>'Inteligencia Artificial I','departamento'=>'informática','created_at' => now(),'updated_at' => now()],
            ['descripcion'=>'Proyecto Final','departamento'=>'sistemas','created_at' => now(),'updated_at' => now()],
            ['descripcion'=>'Reconocimiento de Voz','departamento'=>'sistemas','created_at' => now(),'updated_at' => now()],
            ['descripcion'=>'Robótica','departamento'=>'sistemas','created_at' => now(),'updated_at' => now()],

            ['descripcion'=>'Introduccion a la Programación','departamento'=>'sistemas','created_at' => now(),'updated_at' => now()],
            ['descripcion'=>'Proyecto Final','departamento'=>'sistemas','created_at' => now(),'updated_at' => now()],
            ['descripcion'=>'Teoria de Autómatas y Lenguajes Formales','departamento'=>'informática','created_at' => now(),'updated_at' => now()],
            ['descripcion'=>'Metodos,Tecnicas y Taller de Programación','departamento'=>'sistemas','created_at' => now(),'updated_at' => now()],

            ['descripcion'=>'Taller de Ingenieria de Software','departamento'=>'sistemas','created_at' => now(),'updated_at' => now()],
            ['descripcion'=>'Taller de Programación de Bajo Nivel','departamento'=>'informática','created_at' => now(),'updated_at' => now()],
            ['descripcion'=>'Tecnología de Redes Avanzadas','departamento'=>'informática','created_at' => now(),'updated_at' => now()],
            ['descripcion'=>'Redes Avanzadas de Computadoras','departamento'=>'sistemas','created_at' => now(),'updated_at' => now()],

            ['descripcion'=>'Teoría de Grafos','departamento'=>'informática','created_at' => now(),'updated_at' => now()],
            ['descripcion'=>'Métodos,Técnicas y Taller de Programación','departamento'=>'sistemas','created_at' => now(),'updated_at' => now()],
            ['descripcion'=>'Telefonía IP','departamento'=>'sistemas','created_at' => now(),'updated_at' => now()],
            ['descripcion'=>'Técnicas de Ruteo Avanzado','departamento'=>'sistemas','created_at' => now(),'updated_at' => now()],
            ['descripcion'=>'Administracion de Servidores Internet','departamento'=>'sistemas','created_at' => now(),'updated_at' => now()],
            ['descripcion'=>'Redes de Nueva Generación','departamento'=>'sistemas','created_at' => now(),'updated_at' => now()],

            ['descripcion'=>'Ingeniería de Software','departamento'=>'sistemas','created_at' => now(),'updated_at' => now()],
            ['descripcion'=>'Programación','departamento'=>'informática','created_at' => now(),'updated_at' => now()],
            ['descripcion'=>'Elementos de Programación y Estructura de Datos','departamento'=>'sistemas','created_at' => now(),'updated_at' => now()],
            ['descripcion'=>'Elementos de Programación y Estructura de Datos','departamento'=>'sistemas','created_at' => now(),'updated_at' => now()],

            ['descripcion'=>'Sistemas de Información I','departamento'=>'sistemas','created_at' => now(),'updated_at' => now()],
            ['descripcion'=>'Sistemas de Información I','departamento'=>'sistemas','created_at' => now(),'updated_at' => now()],
            ['descripcion'=>'Introduccion a la Programación','departamento'=>'sistemas','created_at' => now(),'updated_at' => now()],
            ['descripcion'=>'Sistemas de Información II','departamento'=>'sistemas','created_at' => now(),'updated_at' => now()],

            ['descripcion'=>'Introduccion a la Programación','departamento'=>'sistemas','created_at' => now(),'updated_at' => now()],
            ['descripcion'=>'Computacion','departamento'=>'industrial','created_at' => now(),'updated_at' => now()],


        ];
        DB::table('materias')->insert($data);
    }
}
