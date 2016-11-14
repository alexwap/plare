<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUnidadesOperativasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('unidades_operativas', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre');
            $table->string('direccion');
            $table->string('telefono',20);
            $table->string('jefe_ape_pat',50);
            $table->string('jefe_ape_mat',50);
            $table->string('jefe_nombres',50);
            $table->string('jefe_telefono',20);
            $table->string('jefe_email',60);
            $table->double('estado',1);
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
        Schema::dropIfExists('unidades_operativas');
    }
}
