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
           'code'=>'0001',
            'asignatura' => 'Lenguaje',
            'course_id'=> 1,
         ]);
         DB::table('asignaturas')->insert([
            'code'=>'0002',
            'asignatura' => 'Biología',
            'course_id'=> 1,
         ]);        DB::table('asignaturas')->insert([
            'code'=>'0003',
            'asignatura' => 'Matemáticas',
            'course_id'=> 1,
         ]);        DB::table('asignaturas')->insert([
            'code'=>'0004',
            'asignatura' => 'Física',
            'course_id'=> 1,
         ]);        DB::table('asignaturas')->insert([
            'code'=>'0005',
            'asignatura' => 'Química',
            'course_id'=> 1,
         ]);        DB::table('asignaturas')->insert([
            'code'=>'0006',
            'asignatura' => 'Inglés',
            'course_id'=> 1,
         ]);

    }
}
