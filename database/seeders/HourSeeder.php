<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class HourSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // 
        DB::table('hours')->insert([
            'inicio' => '8:00',
         ]);
         DB::table('hours')->insert([
            'inicio' => '8:45',
         ]);
         DB::table('hours')->insert([
            'inicio' => '9:45',
         ]);
         DB::table('hours')->insert([
            'inicio' => '10:30',
         ]);
         DB::table('hours')->insert([
            'inicio' => '11:00',
         ]);
         DB::table('hours')->insert([
            'inicio' => '12:00',
         ]);
         DB::table('hours')->insert([
            'inicio' => '8:00',
         ]);
         DB::table('hours')->insert([
            'inicio' => '14:00',
         ]);
         DB::table('hours')->insert([
            'inicio' => '15:00',
         ]);
         DB::table('hours')->insert([
            'inicio' => '16:00',
         ]);
         DB::table('hours')->insert([
            'inicio' => '17:00',
         ]);
         DB::table('hours')->insert([
            'inicio' => '17:30',
         ]);
         DB::table('hours')->insert([
            'inicio' => '18:00',
         ]);
    }
}
