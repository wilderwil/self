<?php 
namespace Database\Seeders;

use App\Models\Mood;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
class MoodSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Mood::create(['name'=>'Muy Feliz']);
        Mood::create(['name'=>'Contento']);
        Mood::create(['name'=>'Feliz']);
        Mood::create(['name'=>'Serio']);
        Mood::create(['name'=>'Enfermo']);
        Mood::create(['name'=>'Triste']);
        Mood::create(['name'=>'Preocupado']);
        Mood::create(['name'=>'Muy Triste']);
    }
}
