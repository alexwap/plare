<?php

use Illuminate\Database\Seeder;

class SeederPersonal extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('personals')->insert([
            ['codigo' => '86086','dni' => '2384908','paterno' => 'SUPO','materno' => 'QUIZA VDA DE HUACASI','nombres' => 'JUANA CRISTINA','categoria_personals_id' => '5'],
            ['codigo' => '35','dni' => '1211009','paterno' => 'SURCO','materno' => 'HILAQUITA','nombres' => 'TOMAS PERCY','categoria_personals_id' => '5'],
            ['codigo' => '60','dni' => '1216581','paterno' => 'TAPIA','materno' => 'CALLE','nombres' => 'ADRIAN GILBERTO','categoria_personals_id' => '5'],
            ['codigo' => '6801','dni' => '1235699','paterno' => 'TAPIA','materno' => 'PEDRAZA','nombres' => 'ELAR ROLANDO','categoria_personals_id' => '5'],
            ['codigo' => '6107','dni' => '1267625','paterno' => 'TAPIA','materno' => 'RIVERA','nombres' => 'REMIGIO','categoria_personals_id' => '5'],
            ['codigo' => '7006','dni' => '1235818','paterno' => 'TICONA','materno' => 'BENAVENTE','nombres' => 'EUSEBIO CRISTOBAL','categoria_personals_id' => '5'],
            ['codigo' => '7210','dni' => '1205813','paterno' => 'TICONA','materno' => 'CASTRO','nombres' => 'JUSTINIANO','categoria_personals_id' => '5'],
            ['codigo' => '7001','dni' => '1219652','paterno' => 'TICONA','materno' => 'VDA DE FLORES','nombres' => 'SILA ISABEL','categoria_personals_id' => '5'],
            ['codigo' => '86','dni' => '1237015','paterno' => 'TOLEDO','materno' => 'DE NUÑEZ','nombres' => 'ELBA BEATRIZ','categoria_personals_id' => '5'],
            ['codigo' => '77058','dni' => '72933686','paterno' => 'TORRES','materno' => 'BENAVENTE','nombres' => 'JESUS MANUEL','categoria_personals_id' => '5'],
            ['codigo' => '160','dni' => '23954061','paterno' => 'TORRES','materno' => 'CASTILLO','nombres' => 'RAMON AURELIO','categoria_personals_id' => '5'],
            ['codigo' => '87083','dni' => '1764601','paterno' => 'TORRES','materno' => 'CORNEJO','nombres' => 'PORFIRIO ABEL','categoria_personals_id' => '5'],
            ['codigo' => '79','dni' => '1200471','paterno' => 'TUMI','materno' => 'MAMANI','nombres' => 'CRISTOBAL VALENTIN','categoria_personals_id' => '5'],
            ['codigo' => '121','dni' => '1224729','paterno' => 'TURPO','materno' => 'COAQUIRA','nombres' => 'CELSO ANTONIO','categoria_personals_id' => '5'],
        ]);
        /*
         *
         *
         * */
    }
}
