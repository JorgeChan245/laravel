<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        
        //crear rol
        $admin = Role::create(['name'=>'admin']);       
        $secretaria = Role::create(['name'=>'secretaria']);
        $doctor = Role::create(['name'=>'doctor']);
        $paciente = Role::create(['name'=>'paciente']);
        $usuario = Role::create(['name'=>'usuario']);


        Permission::create(['name'=>'admin.index']);
        Permission::create(['name'=>'user.index']);
//rutas para el admin - usuario
Permission::create(['name'=>'admin.usuarios.index'])->syncRoles([$admin]);
Permission::create(['name'=>'admin.usuarios.create'])->syncRoles([$admin]);
Permission::create(['name'=>'admin.usuarios.store'])->syncRoles([$admin]);
Permission::create(['name'=>'admin.usuarios.show'])->syncRoles([$admin]);
Permission::create(['name'=>'admin.usuarios.edit'])->syncRoles([$admin]);
Permission::create(['name'=>'admin.usuarios.update'])->syncRoles([$admin]);
Permission::create(['name'=>'admin.usuarios.confirmDelete'])->syncRoles([$admin]);
Permission::create(['name'=>'admin.usuarios.destroy'])->syncRoles([$admin]);
// Crear permisos para admin - secretarias
Permission::create(['name'=>'admin.secretarias.index'])->syncRoles([$admin]);
Permission::create(['name' => 'admin.secretarias.create'])->syncRoles([$admin]);
Permission::create(['name' => 'admin.secretarias.store'])->syncRoles([$admin]);
Permission::create(['name' => 'admin.secretarias.show'])->syncRoles([$admin]);
Permission::create(['name' => 'admin.secretarias.edit'])->syncRoles([$admin]);
Permission::create(['name' => 'admin.secretarias.update'])->syncRoles([$admin]);
Permission::create(['name' => 'admin.secretarias.confirmDelete'])->syncRoles([$admin]);
Permission::create(['name' => 'admin.secretarias.destroy'])->syncRoles([$admin]);

// Crear permisos para admin - consultorios
Permission::create(['name'=>'admin.consultorios.index'])->syncRoles([$admin,$secretaria,$usuario]);
Permission::create(['name' => 'admin.consultorios.create'])->syncRoles([$admin,$secretaria]);
Permission::create(['name' => 'admin.consultorios.store'])->syncRoles([$admin,$secretaria]);
Permission::create(['name' => 'admin.consultorios.show'])->syncRoles([$admin,$secretaria]);
Permission::create(['name' => 'admin.consultorios.edit'])->syncRoles([$admin,$secretaria]);
Permission::create(['name' => 'admin.consultorios.update'])->syncRoles([$admin,$secretaria]);
Permission::create(['name' => 'admin.consultorios.confirmDelete'])->syncRoles([$admin]);
Permission::create(['name' => 'admin.consultorios.destroy'])->syncRoles([$admin]);
// Crear permisos para admin - libros
Permission::create(['name'=>'admin.libros.index'])->syncRoles([$admin,$secretaria]);
Permission::create(['name' => 'admin.libros.create'])->syncRoles([$admin,$secretaria]);
Permission::create(['name' => 'admin.libros.store'])->syncRoles([$admin,$secretaria]);
Permission::create(['name' => 'admin.libros.show'])->syncRoles([$admin,$secretaria]);
Permission::create(['name' => 'admin.libros.edit'])->syncRoles([$admin,$secretaria]);
Permission::create(['name' => 'admin.libros.update'])->syncRoles([$admin,$secretaria]);
Permission::create(['name' => 'admin.libros.confirmDelete'])->syncRoles([$admin,$secretaria]);
Permission::create(['name' => 'admin.libros.destroy'])->syncRoles([$admin,$secretaria]);

// Crear permisos para admin - horarios
Permission::create(['name'=>'admin.horarios.index'])->syncRoles([$admin,$secretaria]);
Permission::create(['name' => 'admin.horarios.create'])->syncRoles([$admin,$secretaria]);
Permission::create(['name' => 'admin.horarios.store'])->syncRoles([$admin,$secretaria]);
Permission::create(['name' => 'admin.horarios.show'])->syncRoles([$admin,$secretaria]);
Permission::create(['name' => 'admin.horarios.edit'])->syncRoles([$admin,$secretaria]);
Permission::create(['name' => 'admin.horarios.update'])->syncRoles([$admin,$secretaria]);
Permission::create(['name' => 'admin.horarios.confirmDelete'])->syncRoles([$admin,$secretaria]);
Permission::create(['name' => 'admin.horarios.destroy'])->syncRoles([$admin,$secretaria]);
//ajx
Permission::create(['name'=>'admin.horarios.cargar_datos_consultorio'])->syncRoles($admin,$secretaria);
//
Permission::create(['name' => 'user..calendario'])->syncRoles([$usuario]);

    }
}
