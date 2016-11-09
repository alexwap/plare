<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePersonalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('personals', function (Blueprint $table) {
            $table->increments('id');
            $table->string('codigo');
            $table->string('dni');
            $table->string('paterno');
            $table->string('materno');
            $table->string('nombres');

            $table->integer('categoria_personals_id')->unsigned();

            $table->foreign('categoria_personals_id')
                ->references('id')
                ->on('categoria_personals')
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
        Schema::dropIfExists('personals');
    }
}
