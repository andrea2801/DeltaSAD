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
            $table->string('nombre');
            $table->string('apellidos');
            $table->integer('telefono');
            $table->string('dni', 9);
            $table->string('persona_contacto');
            $table->string('detalle');
            $table->string('tareas')->nullable();
            $table->decimal('horas_asignadas');
            $table->date('fecha_alta');
            $table->string('archivos_adjuntos')->nullable();
            $table->unsignedBigInteger('tf_asignada')->nullable();
            $table->unsignedBigInteger('tf_asignada2')->nullable();
            $table->unsignedBigInteger('zona');
            $table->timestamps();
            $table->foreign('zona')->references('id')->on('zonas');
            $table->foreign('tf_asignada')->references('id')->on('trabajadoras');
            $table->foreign('tf_asignada2')->references('id')->on('trabajadoras');

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
