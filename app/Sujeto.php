<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;
use App\Sujeto;

class Sujeto extends Model
{
     //Relaciones
    public function usuario()
    {
       //Creamos usuario con el perfil de Administrador
       $sujeto = new Sujeto();
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
