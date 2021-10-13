<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CourseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // 
        DB::table('courses')->insert([
            'course' => 'I°A',
         ]);
    
         DB::table('courses')->insert([
            'course' => 'I°B',
         ]);
         DB::table('courses')->insert([
            'course' => 'I°C',
         ]);
         DB::table('courses')->insert([
            'course' => 'I°D',
         ]);
         DB::table('courses')->insert([
            'course' => 'II°A',
         ]);
    
         DB::table('courses')->insert([
            'course' => 'II°B',
         ]);
         DB::table('courses')->insert([
            'course' => 'II°C',
         ]);
         DB::table('courses')->insert([
            'course' => 'II°D',
         ]);
         DB::table('courses')->insert([
            'course' => 'III°A',
         ]);
    
         DB::table('courses')->insert([
            'course' => 'III°B',
         ]);
         DB::table('courses')->insert([
            'course' => 'III°C',
         ]);
         DB::table('courses')->insert([
            'course' => 'III°D',
         ]);
         DB::table('courses')->insert([
            'course' => 'IV°A',
         ]);
    
         DB::table('courses')->insert([
            'course' => 'IV°B',
         ]);
         DB::table('courses')->insert([
            'course' => 'IV°C',
         ]);
         DB::table('courses')->insert([
            'course' => 'IV°D',
         ]);
         
    }
}
