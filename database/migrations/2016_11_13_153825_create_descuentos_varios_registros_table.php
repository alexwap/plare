<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDescuentosVariosRegistrosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('descuentos_varios_registros', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('descuento_vario_id')->unsigned();
            $table->foreign('descuento_vario_id')
                ->references('id')
                ->on('descuentos_varios')
                ->onDelete('cascade');
            $table->integer('unidad_operativa_id')->unsigned();
            $table->foreign('unidad_operativa_id')
                ->references('id')
                ->on('unidades_operativas')
                ->onDelete('cascade');
            $table->integer('resp_unidad_operativa_id')->unsigned();
            $table->foreign('resp_unidad_operativa_id')
                ->references('id')
                ->on('responsables_unidades_operativas')
                ->onDelete('cascade');
            $table->integer('personal_id')->unsigned();
            $table->foreign('personal_id')
                ->references('id')
                ->on('personals')
                ->onDelete('cascade');
            $table->decimal('monto',5,2);
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
        Schema::dropIfExists('descuentos_varios_registros');
    }
}
