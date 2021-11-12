<?php

namespace Database\Seeders;

use App\Models\Program;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
class ProgramSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Program::create([
            'name' => 'Creatividad & Artes',
         ]);
         Program::create([
            'name' => 'Medioambiental',
          ]);
         Program::create([
            'name' => 'Bienestar & Salud',
          ]);
          Program::create([
            'name' => 'Socioemocional',
          ]);
    }
}
