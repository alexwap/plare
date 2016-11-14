<?php

use Illuminate\Database\Seeder;

class SeederCategoriaPersonal extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categoria_personals')->insert([
            ['nombre' => 'Administrativo','observacion' => ''],
            ['nombre' => 'Administrativo Contratado','observacion' => ''],
            ['nombre' => 'Docente','observacion' => ''],
            ['nombre' => 'Docente Contratado','observacion' => ''],
            ['nombre' => 'Pensionista','observacion' => ''],
            ['nombre' => 'Salud','observacion' => ''],
        ]);
    }
}
