<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Doctor;
use App\Models\Secretaria;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        $this->call([RoleSeeder::class]);
      User::create([
'name'=>'admin',
'email'=>'admin@gmail.com',
'password'=>Hash::make('1111')
        ])->assignRole('admin');
         
        User::create([
            'name'=>'usuario2',
            'email'=>'usuario2@gmail.com',
            'password'=>Hash::make('12345678')
                    ])->assignRole('secretaria');
        Secretaria::create([
            'nombres' => 'secre1',
            'apellidos' => 'taria1',
            'RFC' => '1234456789',
            'celular' => '9991505345',
            'fecha_nacimiento' => '2002/10/12',
            'direccion' => 'col.centro',
            'user_id'=>'2',
        ]);
       
                    User::create([
                        'name'=>'usuario3',
                        'email'=>'usuario3@gmail.com',
                        'password'=>Hash::make('12345678')
                                ])->assignRole('doctor');
                                Doctor::create([
                                    'nombres' => 'docto1',
          'apellidos' => 're',
          'telefono'=> '000000001',
         'licencia_medica'=> '11111212',
         'especialidad'=> 'urologo',
         'user_id'=>'3',]);
                                
                                            User::create([
                                                'name'=>'usuario4',
                                                'email'=>'usuario4@gmail.com',
                                                'password'=>Hash::make('12345678')
                                                        ])->assignRole('paciente');
                                                        User::create([
                                                            'name'=>'usuario5',
                                                            'email'=>'usuario5@gmail.com',
                                                            'password'=>Hash::make('12345678')
                                                                    ])->assignRole('usuario');

                                                                    /// admin,secretaria,docotres

/*Crear roles
$admin = Role::firstOrCreate(['name' => 'admin']);
$secretaria = Role::firstOrCreate(['name' => 'secretaria']);
$doctor = Role::firstOrCreate(['name' => 'doctor']);
$paciente = Role::firstOrCreate(['name' => 'paciente']);
$usuario = Role::firstOrCreate(['name' => 'usuario']);
*/


        
$this ->call([PacienteSeeder::class]);        

                               
    }
}
