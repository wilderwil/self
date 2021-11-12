<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Wilder Wilches',
            'email' => 'wilderwil@gmail.com',
            'password' => Hash::make('wjwd25117653'),
       //     'role_id' => 1
         ])->assignRole('Administrador');
         User::create([
            'name' => 'Wilder Wilches',
            'email' => 'wilderwil@hotmail.com',
            'password' => Hash::make('wjwd25117653'),
       //     'role_id' => 1
         ])->assignRole('Profesor')->givePermissionTo('profesor.fill');
         User::create([
            'name' => 'Wilder Wilches',
            'email' => 'wilderwil@ztgroupcorp.com',
            'password' => Hash::make('wjwd25117653'),
       //     'role_id' => 1
         ])->assignRole('Alumno');
    }
}
