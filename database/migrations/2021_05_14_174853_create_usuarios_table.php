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
            $table->integer('telefono', 9);
            $table->string('dni', 9);
            $table->string('persona_contacto');
            $table->string('detalle');
            $table->string('tareas')->nullable();
            $table->decimal('horas_asignadas');
            $table->date('fecha_alta');
            $table->string('archivos_adjuntos')->nullable();
            $table->bigInteger('tf_asignada')->nullable();
            $table->bigInteger('tf_asignada2')->nullable();
            $table->integer('zonas');
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
