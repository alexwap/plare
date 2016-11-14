<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(){

        $this->call(SeederCategoriaPersonal::class);
        $this->call(SeederModulos::class);
        $this->call(SeederUser::class);
        $this->call(SeederRoles::class);
        $this->call(SeederModulo_Rol::class);
        $this->call(SeederRol_User::class);
        $this->call(SeederPersonal::class);
        $this->call(SeederUnidadesOperativas::class);
        $this->call(SeederUnidadesOperativasResponsables::class);

    }
}
