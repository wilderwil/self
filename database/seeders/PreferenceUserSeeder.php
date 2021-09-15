<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class PreferenceUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('preference_user')->insert([
            'user_id' => 1,
            'preference_id' =>1 
         ]);
         DB::table('preference_user')->insert([
            'user_id' => 1,
            'preference_id' =>3
         ]);
         DB::table('preference_user')->insert([
            'user_id' => 1,
            'preference_id' =>5
         ]);
  
    }
}
