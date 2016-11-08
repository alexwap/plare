<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePermisosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('permisos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre',255);
            $table->text('descripcion');
            $table->text('observacion');
            $table->timestamps();
        });

        Schema::create('rol_permiso', function (Blueprint $table) {
        $table->increments('id');
        $table->integer('permiso_id')->unsigned();
        $table->integer('rol_id')->unsigned();
        $table->foreign('permiso_id')
                ->references('id')
                ->on('permisos')
                ->onDelete('cascade');
        $table->foreign('rol_id')
                ->references('id')
                ->on('roles')
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
        Schema::dropIfExists('permisos');
    }
}
