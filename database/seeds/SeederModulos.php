<?php

use Illuminate\Database\Seeder;

class SeederModulos extends Seeder{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('modulos')->insert([
            ['nombre' => 'Usuarios','url' => 'usuarios','descripcion' => '','observacion' => ''],
            ['nombre' => 'Roles','url' => 'roles','descripcion' => '','observacion' => ''],
            ['nombre' => 'Permisos','url' => 'permisos','descripcion' => '','observacion' => ''],
            ['nombre' => 'Modulos','url' => 'modulos','descripcion' => '','observacion' => ''],
            ['nombre' => 'Planilla Administrativo','url' => 'administrativos','descripcion' => '','observacion' => ''],
            ['nombre' => 'Planilla Administrativo Contratado','url' => 'administrativos_contr','descripcion' => '','observacion' => ''],
            ['nombre' => 'Planilla Docente','url' => 'docentes','descripcion' => '','observacion' => ''],
            ['nombre' => 'Planilla Docente Contratado','url' => 'roles','docentes_contr' => '','observacion' => ''],
            ['nombre' => 'Planilla Pensionistas','url' => 'pensionistas','descripcion' => '','observacion' => ''],
            ['nombre' => 'Cargar Descuentos Varios','url' => 'carga_descuentos_varios','descripcion' => '','observacion' => ''],
        ]);
    }
}
