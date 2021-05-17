<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNotificacionesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('notificaciones', function (Blueprint $table) {
            $table->id();
            $table->string('asunto');
            $table->string('detalle');
            $table->unsignedBigInteger('creador');
            $table->unsignedBigInteger('destinatario');
            $table->string('estado')->default('nueva');
            $table->boolean('prioridad')->default(0);
            $table->date('fecha');
            $table->string('archivo_adjunto')->nullable();
            $table->string('respuesta')->nullable();
            $table->timestamps();
            $table->foreign('destinatario')->references('id')->on('trabajadoras');
            $table->foreign('creador')->references('id')->on('trabajadoras');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('notificaciones');
    }
}
