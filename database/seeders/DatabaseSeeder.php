<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(3)->create();
        $this->call(ActivitySeeder::class);
        $this->call(RoleSeeder::class);
        $this->call(UserSeeder::class);
        $this->call(PreferenceSeeder::class);
        $this->call(ActivityUserSeeder::class);
        $this->call(HourSeeder::class);
        $this->call(AsignaturaSeeder::class);
        $this->call(DaySeeder::class);
        $this->call(CourseSeeder::class);
        $this->call(HorariosSeeder::class);
    }
}
