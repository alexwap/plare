<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRolesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('roles', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre',255);
            $table->text('descripcion');
            $table->text('observacion');
            $table->timestamps();
        });

        Schema::create('rol_user', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('rol_id')->unsigned();
            $table->integer('user_id')->unsigned();
            $table->foreign('rol_id')
                    ->references('id')
                    ->on('roles')
                    ->onDelete('cascade');
            $table->foreign('user_id')
                    ->references('id')
                    ->on('users')
                    ->onDelete('cascade');
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
        Schema::dropIfExists('roles');
    }
}
