<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateZonaTuristicasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('zona_turisticas', function (Blueprint $table) {
            $table->id();
            $table->string('Nombre', '100');
            $table->text('Descripcion')->nullable();
            $table->string('Direccion');
            $table->string('Horario');
            $table->string('Actividades');
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
        Schema::dropIfExists('zona_turisticas');
    }
}
