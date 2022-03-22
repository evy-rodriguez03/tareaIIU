<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBellezasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bellezas', function (Blueprint $table) {
            $table->id();
            $table->string('pSombras');
            $table->string('blush');
            $table->string('delineador');
            $table->string('base');
            $table->string('polvo');
            $table->string('listics');
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
        Schema::dropIfExists('bellezas');
    }
}
