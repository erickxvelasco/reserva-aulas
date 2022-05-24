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
            ['descripcion'=>'introduccion a la programacion','departamento'=>'sistemas','created_at' => now(),'updated_at' => now()],
            ['descripcion'=>'elementos de programacion estructura de datos','departamento'=>'sistemas','created_at' => now(),'updated_at' => now()],
            ['descripcion'=>'base de datos I','departamento'=>'sistemas','created_at' => now(),'updated_at' => now()],
            ['descripcion'=>'base de datos II','departamento'=>'sistemas','created_at' => now(),'updated_at' => now()],
            ['descripcion'=>'sistemas de informacion I','departamento'=>'sistemas','created_at' => now(),'updated_at' => now()],


            //nuevas materias
            ['descripcion'=>'Aplicación de Sistemas Operativos (3)','departamento'=>'sistemas','created_at' => now(),'updated_at' => now()],
            ['descripcion'=>'Proyecto final (5)','departamento'=>'sistemas','created_at' => now(),'updated_at' => now()],
            ['descripcion'=>'Taller de simulacion de sistemas (2)','departamento'=>'sistemas','created_at' => now(),'updated_at' => now()],

            ['descripcion'=>'Base de Datos I (2)','departamento'=>'sistemas','created_at' => now(),'updated_at' => now()],
            ['descripcion'=>'Taller de Base de Datos (1)','departamento'=>'sistemas','created_at' => now(),'updated_at' => now()],
            ['descripcion'=>'Taller de Base de Datos (2)','departamento'=>'sistemas','created_at' => now(),'updated_at' => now()],
            ['descripcion'=>'Date Warehouse (1)','departamento'=>'sistemas','created_at' => now(),'updated_at' => now()],
            ['descripcion'=>'Graficacion por Computadora (1)','departamento'=>'informática','created_at' => now(),'updated_at' => now()],

            ['descripcion'=>'Metodos,Tecnicas y Taller de Programación (4)','departamento'=>'sistemas','created_at' => now(),'updated_at' => now()],
            ['descripcion'=>'Introduccion a la Programación (10)','departamento'=>'sistemas','created_at' => now(),'updated_at' => now()],
            ['descripcion'=>'Programación Web (1)','departamento'=>'informática','created_at' => now(),'updated_at' => now()],

            ['descripcion'=>'Taller de Ingenieria de Software (3)','departamento'=>'sistemas','created_at' => now(),'updated_at' => now()],

            ['descripcion'=>'Sistemas de Informacion II (2)','departamento'=>'sistemas','created_at' => now(),'updated_at' => now()],
            ['descripcion'=>'Metodología y Planificación de Proyecto de Grado (3)','departamento'=>'sistemas','created_at' => now(),'updated_at' => now()],

            ['descripcion'=>'Redes de Computadoras (1)','departamento'=>'sistemas','created_at' => now(),'updated_at' => now()],
            ['descripcion'=>'Redes de Computadoras (2)','departamento'=>'sistemas','created_at' => now(),'updated_at' => now()],
            ['descripcion'=>'Taller de Sistemas Operativos (1)','departamento'=>'sistemas','created_at' => now(),'updated_at' => now()],
            ['descripcion'=>'Taller de Sistemas Operativos (2)','departamento'=>'sistemas','created_at' => now(),'updated_at' => now()],
            ['descripcion'=>'Metodología y Planificación de Proyecto de Grado (5)','departamento'=>'sistemas','created_at' => now(),'updated_at' => now()],
            ['descripcion'=>'Dinamica de Sistemas (1)','departamento'=>'sistemas','created_at' => now(),'updated_at' => now()],

            ['descripcion'=>'Estructura y Semantica de Lenguajes de Programación(1)','departamento'=>'informática','created_at' => now(),'updated_at' => now()],
            ['descripcion'=>'Evaluación y Auditoria de Sistemas(1)','departamento'=>'sistemas','created_at' => now(),'updated_at' => now()],
            ['descripcion'=>'Proyecto Final(3)','departamento'=>'sistemas','created_at' => now(),'updated_at' => now()],
            ['descripcion'=>'Taller de Grado I(7)','departamento'=>'informática','created_at' => now(),'updated_at' => now()],
            ['descripcion'=>'Taller de Grado II(4)','departamento'=>'informática','created_at' => now(),'updated_at' => now()],
            ['descripcion'=>'Metodologia de la Investigación y Técnicas de Comunicación(1)','departamento'=>'sistemas','created_at' => now(),'updated_at' => now()],

            ['descripcion'=>'Evaluacion y Auditoria de Sistemas(2)','departamento'=>'sistemas','created_at' => now(),'updated_at' => now()],
            ['descripcion'=>'Aplicaciones Web Avanzadas(1)','departamento'=>'informática','created_at' => now(),'updated_at' => now()],
            ['descripcion'=>'Metodos,Tecnicas y Taller de Programación (6)','departamento'=>'sistemas','created_at' => now(),'updated_at' => now()],
            ['descripcion'=>'Metodologia de la Investigación y Técnicas de Comunicación(4)','departamento'=>'sistemas','created_at' => now(),'updated_at' => now()],

            ['descripcion'=>'Simulación de Sistemas(1)','departamento'=>'sistemas','created_at' => now(),'updated_at' => now()],
            ['descripcion'=>'Simulación de Sistemas(2)','departamento'=>'sistemas','created_at' => now(),'updated_at' => now()],
            ['descripcion'=>'Taller de Simulacion de Sistemas(1)','departamento'=>'sistemas','created_at' => now(),'updated_at' => now()],
            ['descripcion'=>'Introduccion a la Programación (4)','departamento'=>'sistemas','created_at' => now(),'updated_at' => now()],
            ['descripcion'=>'Metodología y Planificación de Proyecto de Grado(5)','departamento'=>'sistemas','created_at' => now(),'updated_at' => now()],

            ['descripcion'=>'Arquitectura de Computadoras I(1)','departamento'=>'sistemas','created_at' => now(),'updated_at' => now()],
            ['descripcion'=>'Electroctecnia Industrial(5)','departamento'=>'industrial','created_at' => now(),'updated_at' => now()],

            ['descripcion'=>'Arquitectura de Computadoras I(3)','departamento'=>'sistemas','created_at' => now(),'updated_at' => now()],
            ['descripcion'=>'Arquitectura de Computadoras II(1)','departamento'=>'sistemas','created_at' => now(),'updated_at' => now()],

            ['descripcion'=>'Informatica Forense(1)','departamento'=>'sistemas','created_at' => now(),'updated_at' => now()],

            ['descripcion'=>'Base de Datos II(1)','departamento'=>'sistemas','created_at' => now(),'updated_at' => now()],
            ['descripcion'=>'Base de Datos II(2)','departamento'=>'sistemas','created_at' => now(),'updated_at' => now()],
            ['descripcion'=>'Programación Funcional(1)','departamento'=>'informática','created_at' => now(),'updated_at' => now()],

            ['descripcion'=>'Ingeniería Económica(3)','departamento'=>'sistemas','created_at' => now(),'updated_at' => now()],
            ['descripcion'=>'Contabilidad Basica(3)','departamento'=>'sistemas','created_at' => now(),'updated_at' => now()],

            ['descripcion'=>'Electrotecnia Industrial(1)','departamento'=>'industrial','created_at' => now(),'updated_at' => now()],

            ['descripcion'=>'Elementos de Programación y Estructura de Datos(2)','departamento'=>'sistemas','created_at' => now(),'updated_at' => now()],
            ['descripcion'=>'Elementos de Programación y Estructura de Datos(3)','departamento'=>'sistemas','created_at' => now(),'updated_at' => now()],
            ['descripcion'=>'Introduccion a la Programación(2)','departamento'=>'sistemas','created_at' => now(),'updated_at' => now()],
            ['descripcion'=>'Taller de Ingenieria de Software (2)','departamento'=>'sistemas','created_at' => now(),'updated_at' => now()],
            ['descripcion'=>'Algoritmos Avanzados(1)','departamento'=>'informática','created_at' => now(),'updated_at' => now()],
            ['descripcion'=>'Arquitectura de Computadoras I(2)','departamento'=>'sistemas','created_at' => now(),'updated_at' => now()],

            ['descripcion'=>'Calculo II(6A)','departamento'=>'matematicas','created_at' => now(),'updated_at' => now()],

            ['descripcion'=>'Ingeniería de Software(1)','departamento'=>'sistemas','created_at' => now(),'updated_at' => now()],
            ['descripcion'=>'Organización y Métodos(1)','departamento'=>'informática','created_at' => now(),'updated_at' => now()],

            ['descripcion'=>'Taller de Sistemas Operativos(3)','departamento'=>'sistemas','created_at' => now(),'updated_at' => now()],
            ['descripcion'=>'Aplicación de Sistemas Operativos(1)','departamento'=>'sistemas','created_at' => now(),'updated_at' => now()],
            ['descripcion'=>'Aplicación de Sistemas Operativos(2)','departamento'=>'sistemas','created_at' => now(),'updated_at' => now()],

            ['descripcion'=>'Introduccion a la Programación(7)','departamento'=>'sistemas','created_at' => now(),'updated_at' => now()],
            ['descripcion'=>'Metodos,Tecnicas y Taller de Programación(1)','departamento'=>'sistemas','created_at' => now(),'updated_at' => now()],
            ['descripcion'=>'Taller de Ingenieria de Software(1)','departamento'=>'sistemas','created_at' => now(),'updated_at' => now()],
            ['descripcion'=>'Taller de Grado I(6)','departamento'=>'informática','created_at' => now(),'updated_at' => now()],
            ['descripcion'=>'Métodos y Técnicas de Programación(1)','departamento'=>'informática','created_at' => now(),'updated_at' => now()],
            ['descripcion'=>'Interaccion Humano Computador(1)','departamento'=>'informática','created_at' => now(),'updated_at' => now()],

            ['descripcion'=>'Inteligencia Artificial II(2)','departamento'=>'sistemas','created_at' => now(),'updated_at' => now()],
            ['descripcion'=>'Inteligencia Artificial (I)(1)','departamento'=>'informática','created_at' => now(),'updated_at' => now()],
            ['descripcion'=>'Proyecto Final(3)','departamento'=>'sistemas','created_at' => now(),'updated_at' => now()],
            ['descripcion'=>'Reconocimiento de Voz(1)','departamento'=>'sistemas','created_at' => now(),'updated_at' => now()],
            ['descripcion'=>'Robótica(1)','departamento'=>'sistemas','created_at' => now(),'updated_at' => now()],

            ['descripcion'=>'Introduccion a la Programación(5)','departamento'=>'sistemas','created_at' => now(),'updated_at' => now()],
            ['descripcion'=>'Proyecto Final(2)','departamento'=>'sistemas','created_at' => now(),'updated_at' => now()],
            ['descripcion'=>'Teoria de Autómatas y Lenguajes Formales(1)','departamento'=>'informática','created_at' => now(),'updated_at' => now()],
            ['descripcion'=>'Metodos,Tecnicas y Taller de Programación(3)','departamento'=>'sistemas','created_at' => now(),'updated_at' => now()],

            ['descripcion'=>'Taller de Ingenieria de Software(3)','departamento'=>'sistemas','created_at' => now(),'updated_at' => now()],
            ['descripcion'=>'Taller de Programación de Bajo Nivel(1)','departamento'=>'informática','created_at' => now(),'updated_at' => now()],
            ['descripcion'=>'Tecnología de Redes Avanzadas(1)','departamento'=>'informática','created_at' => now(),'updated_at' => now()],
            ['descripcion'=>'Redes Avanzadas de Computadoras(2)','departamento'=>'sistemas','created_at' => now(),'updated_at' => now()],

            ['descripcion'=>'Teoría de Grafos(2)','departamento'=>'informática','created_at' => now(),'updated_at' => now()],
            ['descripcion'=>'Métodos,Técnicas y Taller de Programación(5)','departamento'=>'sistemas','created_at' => now(),'updated_at' => now()],
            ['descripcion'=>'Telefonía IP(1)','departamento'=>'sistemas','created_at' => now(),'updated_at' => now()],
            ['descripcion'=>'Técnicas de Ruteo Avanzado(1)','departamento'=>'sistemas','created_at' => now(),'updated_at' => now()],
            ['descripcion'=>'Administracion de Servidores Internet(1)','departamento'=>'sistemas','created_at' => now(),'updated_at' => now()],
            ['descripcion'=>'Redes de Nueva Generación(1)','departamento'=>'sistemas','created_at' => now(),'updated_at' => now()],

            ['descripcion'=>'Ingeniería de Software(2)','departamento'=>'sistemas','created_at' => now(),'updated_at' => now()],
            ['descripcion'=>'Programación(1)','departamento'=>'informática','created_at' => now(),'updated_at' => now()],
            ['descripcion'=>'Elementos de Programación y Estructura de Datos(1)','departamento'=>'sistemas','created_at' => now(),'updated_at' => now()],
            ['descripcion'=>'Elementos de Programación y Estructura de Datos(5)','departamento'=>'sistemas','created_at' => now(),'updated_at' => now()],

            ['descripcion'=>'Sistemas de Información I(1)','departamento'=>'sistemas','created_at' => now(),'updated_at' => now()],
            ['descripcion'=>'Sistemas de Información I(2)','departamento'=>'sistemas','created_at' => now(),'updated_at' => now()],
            ['descripcion'=>'Introduccion a la Programación(1)','departamento'=>'sistemas','created_at' => now(),'updated_at' => now()],
            ['descripcion'=>'Sistemas de Información II(1A)','departamento'=>'sistemas','created_at' => now(),'updated_at' => now()],

            ['descripcion'=>'Introduccion a la Programación(3)','departamento'=>'sistemas','created_at' => now(),'updated_at' => now()],
            ['descripcion'=>'Computacion(1)','departamento'=>'industrial','created_at' => now(),'updated_at' => now()],


        ];
        DB::table('materias')->insert($data);
    }
}
