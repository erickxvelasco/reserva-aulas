<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSolicitudAulasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('solicitud_aulas', function (Blueprint $table) {
            $table->id();
            $table->integer('solicitud');
            $table->foreign('solicitud')->references('id')->on('solicitudes');
            $table->integer('aula');
            $table->foreign('aula')->references('id')->on('aulas');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('solicitud_aulas');
    }
}
