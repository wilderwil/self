<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ActivitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('activities')->insert([
            'description' => 'Fútbol',
         ]);
         DB::table('activities')->insert([
            'description' => 'Guitarra',
         ]);
         DB::table('activities')->insert([
            'description' => 'Atletismo',
         ]);
         DB::table('activities')->insert([
            'description' => 'Inglés',
         ]);
         DB::table('activities')->insert([
            'description' => 'Gimnacia Rítmica',
         ]);
         DB::table('activities')->insert([
            'description' => 'Voleibol',
         ]);
         DB::table('activities')->insert([
            'description' => 'Coro',
         ]);
         DB::table('activities')->insert([
            'description' => 'Baloncesto',
         ]);
         DB::table('activities')->insert([
            'description' => 'Teatro',
         ]);
         DB::table('activities')->insert([
            'description' => 'Baile',
         ]);
         DB::table('activities')->insert([
            'description' => 'Fotografía',
         ]);
         DB::table('activities')->insert([
            'description' => 'PSU',
         ]);
         DB::table('activities')->insert([
            'description' => 'Medio Ambiente',
         ]);
         DB::table('activities')->insert([
            'description' => 'Handball',
         ]);
         DB::table('activities')->insert([
            'description' => 'Pastoral',
         ]);
    }
}
