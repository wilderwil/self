<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // 
        DB::table('roles')->insert([
            'nombre_rol' => 'Administrador',
         ]);
         DB::table('roles')->insert([
            'nombre_rol' => 'Profesor',
         ]);
         DB::table('roles')->insert([
            'nombre_rol' => 'Alumno',
         ]);
    }
}
