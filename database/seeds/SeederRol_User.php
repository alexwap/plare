<?php

use Illuminate\Database\Seeder;

class SeederRol_User extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('rol_user')->insert([
            ['rol_id' => '1','user_id' => '1','observacion' => ''],
            ['rol_id' => '2','user_id' => '3','observacion' => ''],
            ['rol_id' => '3','user_id' => '2','observacion' => ''],
            ['rol_id' => '4','user_id' => '4','observacion' => ''],
        ]);
    }
}
