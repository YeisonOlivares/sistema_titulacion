<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEstudiantesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('estudiantes', function (Blueprint $table) {
            $table->increments('id');
            $table->string('run',16)->index()->unique();
            $table->string('nombre',32);
            $table->string('telefono',32);
            $table->string('carrera',64);
            $table->integer("id_trabajo")->unsigned()->nullable();
            $table->timestamps();

            $table->foreign('id_trabajo')->references('id')->on('trabajos');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('estudiantes');
    }
}
