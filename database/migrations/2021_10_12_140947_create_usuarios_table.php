<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsuariosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('usuarios', function (Blueprint $table) {
            $table->id();
            $table->string('nombre',44);
            $table->string('apellidos',66);
            $table->string('correo',55);
            $table->string('telefono',11);
            $table->date('fecha_nac');
            $table->text('domicilio',77);
            $table->date('fecha_reg');
            $table->integer('tipo_usuario');
            $table->BigInteger('permiso');
            $table->BigInteger('rol');
            $table->string('contrasena',500);
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
        Schema::dropIfExists('usuarios');
    }
}
