<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateModulosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('modulos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre',255);
            $table->string('url',255);
            $table->text('descripcion');
            $table->text('observacion');
            $table->timestamps();
        });

        Schema::create('modulo_rol', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('modulo_id')->unsigned();
            $table->integer('rol_id')->unsigned();
            $table->foreign('rol_id')
                ->references('id')
                ->on('roles')
                ->onDelete('cascade');
            $table->foreign('modulo_id')
                ->references('id')
                ->on('modulos')
                ->onDelete('cascade');
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
        Schema::dropIfExists('modulos');
    }
}
