<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PreferenceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('preferences')->insert([
            'description' => 'Youtube',
         ]);
         DB::table('preferences')->insert([
            'description' => 'Tik Tok',
         ]);
         DB::table('preferences')->insert([
            'description' => 'Ver Series',
         ]);
         DB::table('preferences')->insert([
            'description' => 'Redes Sociales',
         ]);
         DB::table('preferences')->insert([
            'description' => 'Video Juegos',
         ]);
         DB::table('preferences')->insert([
            'description' => 'Música',
         ]);
         DB::table('preferences')->insert([
            'description' => 'Libros',
         ]);
         DB::table('preferences')->insert([
            'description' => 'Pintar',
         ]);
         DB::table('preferences')->insert([
            'description' => 'Jugar',
         ]);
         DB::table('preferences')->insert([
            'description' => 'Fotografía',
         ]);
         DB::table('preferences')->insert([
            'description' => 'Deporte',
         ]);
         DB::table('preferences')->insert([
            'description' => 'Manualidades',
         ]);
         DB::table('preferences')->insert([
            'description' => 'Medio Ambiente',
         ]);
         DB::table('preferences')->insert([
            'description' => 'Cocinar',
         ]);
         DB::table('preferences')->insert([
            'description' => 'Bailar',
         ]);
         DB::table('preferences')->insert([
            'description' => 'Dibujar',
         ]);
         DB::table('preferences')->insert([
            'description' => 'Cantar',
         ]);
         DB::table('preferences')->insert([
            'description' => 'Animales',
         ]);
         DB::table('preferences')->insert([
            'description' => 'Teatro',
         ]);

    }
}
