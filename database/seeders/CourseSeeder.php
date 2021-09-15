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
            'course' => '7°A',
         ]);
    
         DB::table('courses')->insert([
            'course' => '7°B',
         ]);
         DB::table('courses')->insert([
            'course' => '7°C',
         ]);

    }
}
