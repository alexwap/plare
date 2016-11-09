<?php

use Illuminate\Database\Seeder;

class SeederRoles extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('roles')->insert([
            ['nombre' => 'Super_Admin','descripcion' => '','observacion' => ''],
            ['nombre' => 'Admin_Admis','descripcion' => '','observacion' => ''],
            ['nombre' => 'Admin_Docen','descripcion' => '','observacion' => ''],
            ['nombre' => 'Admin_Pensi','descripcion' => '','observacion' => ''],
        ]);
    }
}
