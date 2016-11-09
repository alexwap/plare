<?php

use Illuminate\Database\Seeder;

class SeederModulo_Rol extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('modulo_rol')->insert([
            ['modulo_id' => '1','rol_id' => '1'],
            ['modulo_id' => '2','rol_id' => '1'],
            ['modulo_id' => '3','rol_id' => '1'],
            ['modulo_id' => '4','rol_id' => '1'],
            ['modulo_id' => '5','rol_id' => '1'],
            ['modulo_id' => '6','rol_id' => '1'],
            ['modulo_id' => '7','rol_id' => '1'],
            ['modulo_id' => '8','rol_id' => '1'],
            ['modulo_id' => '9','rol_id' => '1'],
            ['modulo_id' => '10','rol_id' => '1'],
            ['modulo_id' => '5','rol_id' => '2'],
            ['modulo_id' => '6','rol_id' => '2'],
            ['modulo_id' => '7','rol_id' => '3'],
            ['modulo_id' => '8','rol_id' => '3'],
            ['modulo_id' => '9','rol_id' => '4'],
        ]);
    }
}
