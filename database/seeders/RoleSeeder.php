<?php

namespace Database\Seeders;


use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // 
        $AdminRole = Role::create(['name'=>'Administrador']);
        $ProfesorRole = Role::create(['name'=>'Profesor']);
        $AlumnoRole = Role::create(['name'=>'Alumno']);
        Permission::create(['name'=>'admin.home'])->syncRoles([$AdminRole,$ProfesorRole,$AlumnoRole]);
        Permission::create(['name'=>'admin.preferences.index'])->assignRole($AdminRole);
        Permission::create(['name'=>'admin.preferences.create'])->assignRole($AdminRole);
        Permission::create(['name'=>'admin.preferences.edit'])->assignRole($AdminRole);
        Permission::create(['name'=>'admin.preferences.destroy'])->assignRole($AdminRole);
        Permission::create(['name'=>'admin.asignaturas.index'])->assignRole($AdminRole);
        Permission::create(['name'=>'admin.asignaturas.create'])->assignRole($AdminRole);
        Permission::create(['name'=>'admin.asignaturas.edit'])->assignRole($AdminRole);
        Permission::create(['name'=>'admin.asignaturas.destroy'])->assignRole($AdminRole);
        Permission::create(['name'=>'profesor.fill'])->assignRole($AdminRole);
        Permission::create(['name'=>'profesor.programs'])->assignRole($ProfesorRole);
        //$AdminRole->permissions()->attach();

/*
        DB::table('roles')->insert([
            'nombre_rol' => 'Administrador',
         ]);
         DB::table('roles')->insert([
            'nombre_rol' => 'Profesor',
         ]);
         DB::table('roles')->insert([
            'nombre_rol' => 'Alumno',
         ]);*/
    }
}
