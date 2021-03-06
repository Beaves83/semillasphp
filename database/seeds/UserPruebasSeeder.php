<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Role;
use App\Sujeto;

class UserPruebasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
       //Creamos usuario con el perfil de Administrador
       $usuario = new User();
       $usuario->name = 'Admin1';
       $usuario->email = 'admin@email.es';
       $usuario->password = Hash::make('admin@email.es');     
       $usuario->estado = 'Administrador';
       $usuario->fechaalta = 'Administrador';
       $usuario->email = 'Administrador';
       $usuario->email_verified_at = new \DateTime();
       $usuario->created_at = new \DateTime();
       $usuario->updated_at = new \DateTime(); 
       $usuario->save();
       $usuario->roles()->attach(Role::where('name', 'admin')->first());
       $usuario->sujetos()->attach(Sujeto::where('name', 'admin')->first());
    }
}
