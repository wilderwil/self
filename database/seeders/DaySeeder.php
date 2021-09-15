<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DaySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // 
        DB::table('days')->insert([
            'day' => 'Lunes',
         ]);
         DB::table('days')->insert([
            'day' => 'Martes',
         ]);
         DB::table('days')->insert([
            'day' => 'Miercoles',
         ]);
         DB::table('days')->insert([
            'day' => 'Jueves',
         ]);
         DB::table('days')->insert([
            'day' => 'Viernes',
         ]);
         DB::table('days')->insert([
            'day' => 'Sabado',
         ]);

         

    }
}
