<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDescuentosVariosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('descuentos_varios', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre');
            $table->string('anio');
            $table->string('mes');
            $table->dateTime('carga_fin');
            $table->dateTime('carga_inicio');
            $table->text('observacion');
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
        Schema::dropIfExists('descuentos_varios');
    }
}
