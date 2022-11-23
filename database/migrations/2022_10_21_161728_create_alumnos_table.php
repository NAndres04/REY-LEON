<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('alumnos', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_apoderado')->constrained('apoderados');
            $table->foreignId('id_curso')->constrained('cursos');
            $table->string('rut');
            $table->string('nombre');
            $table->string('ap_paterno');
            $table->string('ap_materno');
            $table->date('fecha_nac');
            $table->string('nacionalidad');
            $table->string('domicilio');
            $table->string('edad');
            $table->string('nombre_emergencia');
            $table->string('fono_emergencia');
            $table->string('matricula')->nullable();
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
        Schema::dropIfExists('alumnos');
    }
};
