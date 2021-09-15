<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AsignaturaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // 
        DB::table('asignaturas')->insert([
            'asignatura' => 'Lenguaje',
         ]);
         DB::table('asignaturas')->insert([
            'asignatura' => 'Biología',
         ]);        DB::table('asignaturas')->insert([
            'asignatura' => 'Matemáticas',
         ]);        DB::table('asignaturas')->insert([
            'asignatura' => 'Física',
         ]);        DB::table('asignaturas')->insert([
            'asignatura' => 'Química',
         ]);        DB::table('asignaturas')->insert([
            'asignatura' => 'Inglés',
         ]);

    }
}
