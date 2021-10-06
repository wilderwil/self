<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class ActivityUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('activity_user')->insert([
            'user_id' => 1,
            'activity_id' =>1,
            'hour_id'=>12,
            'day_id'=>2
         ]);
         DB::table('activity_user')->insert([
            'user_id' => 1,
            'activity_id' =>3,
            'hour_id'=>12,
            'day_id'=>3
         ]);
         DB::table('activity_user')->insert([
            'user_id' => 1,
            'activity_id' =>5,
            'hour_id'=>13,
            'day_id'=>5
         ]);
  
    }
}
