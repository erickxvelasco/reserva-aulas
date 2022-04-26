<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSolicitudsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('solicitudes', function (Blueprint $table) {
            $table->id();
            $table->integer('gestion');//llave foranea
            $table->foreign('gestion')->references('id')->on('gestiones');
            $table->tinyinteger('usuario');//llave foranea
            $table->foreign('usuario')->references('id')->on('users');
            $table->tinyInteger('estado'); //1.-en proceso;2.-aceptado;3.-rechazado
            $table->string('mensaje')->nullable();//mensaje mandado desde el admin
            $table->tinyinteger('admin');//llave foranea a admin
            $table->foreign('admin')->references('id')->on('users');
            $table->string('motivo');
            $table->date('fecha');
            $table->dateTime('inicio');
            $table->dateTime('fin');

            $table->timestamps();

            //tablas intermedias
            //solicitud_aulas(solicitud,aula)
            //solicitud_grupo(solicitud,grupo)

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('solicitudes');
    }
}
