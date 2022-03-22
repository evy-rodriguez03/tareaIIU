<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCaballerosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('caballeros', function (Blueprint $table) {
            $table->id();
            $table->string('nombre_completo');
            $table->string('dni', 15);
            $table->string('correo_electronico')->unique();
            $table->integer('telefono');
            $table->enum('genero', array('femenino', 'masculino'));
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
        Schema::dropIfExists('caballeros');
    }
}
