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
            ['nombre' => 'Administrativo','obs' => ''],
            ['nombre' => 'Administrativo Contratado','obs' => ''],
            ['nombre' => 'Docente','obs' => ''],
            ['nombre' => 'Docente Contratado','obs' => ''],
            ['nombre' => 'Pensionista','obs' => ''],
            ['nombre' => 'Salud','obs' => ''],
        ]);
    }
}
