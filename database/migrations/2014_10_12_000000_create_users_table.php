<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('apellidos');
            $table->string('nombres');
            $table->bigInteger('ci')->unique();
            $table->tinyInteger('expedido');
            $table->string('domicilio')->nullable();
            $table->bigInteger('celular')->nullable();
            $table->tinyInteger('cargo');

            $table->tinyInteger('tipo');
            $table->string('email')->unique();
            $table->string('password');
            $table->tinyinteger('estado');

            $table->timestamp('email_verified_at')->nullable();
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
