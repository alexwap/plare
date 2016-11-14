<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateResponsablesUnidadesOperativasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('responsables_unidades_operativas', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('unidad_operativa_id')->unsigned();
            $table->string('dni',8);
            $table->string('ape_pat',50);
            $table->string('ape_mat',50);
            $table->string('nombres',50);
            $table->string('direccion');
            $table->string('telefono1',20);
            $table->string('telefono2',20);
            $table->string('email',80);
            $table->double('estado',1);
            $table->text('observacion');
            $table->timestamps();
            $table->foreign('unidad_operativa_id')
                ->references('id')
                ->on('unidades_operativas')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('responsables_unidades_operativas');
    }
}
