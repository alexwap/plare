<?php

use Illuminate\Database\Seeder;

class SeederUser extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            ['name' => 'Mario Melendez','email' => 'super_admin@pc.com','password' => '$2y$10$KmLGE63E7XGwDxpQviP2BeMIQ7MsK6sKfB4FuRycAy4TBDgsfiWrS','remember_token' => ''],
            ['name' => 'Juanito Anahua','email' => 'admin_docente@pc.com','password' => '$2y$10$KmLGE63E7XGwDxpQviP2BeMIQ7MsK6sKfB4FuRycAy4TBDgsfiWrS','remember_token' => ''],
            ['name' => 'Ana Maria Valero','email' => 'admin_administrativo@pc.com','password' => '$2y$10$KmLGE63E7XGwDxpQviP2BeMIQ7MsK6sKfB4FuRycAy4TBDgsfiWrS','remember_token' => ''],
            ['name' => 'Elard Romero','email' => 'admin_pensionista@pc.com','password' => '$2y$10$KmLGE63E7XGwDxpQviP2BeMIQ7MsK6sKfB4FuRycAy4TBDgsfiWrS','remember_token' => ''],
        ]);
    }
}
