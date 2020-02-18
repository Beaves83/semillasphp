<?php

use Illuminate\Database\Seeder;
use App\Role;

class RoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       $role = new Role();
       $role->name = 'admin';
       $role->description = 'Administrador';
       $role->save();
       
       $role = new Role();
       $role->name = 'agricultordeclaracionpropia';
       $role->description = 'Agricultor declaración propia';
       $role->save();
       
       $role = new Role();
       $role->name = 'agricultor';
       $role->description = 'Agricultor';
       $role->save();
       
       $role = new Role();
       $role->name = 'acondicionadocolaborador';
       $role->description = 'Acondicionado colaborador';
       $role->save();
       
       $role = new Role();
       $role->name = 'acondicionadonocolaborador';
       $role->description = 'Acondicionado no colaborador';
       $role->save();
       
       $role = new Role();
       $role->name = 'gestorcolaborador';
       $role->description = 'Gestor colaborador';
       $role->save();
       
       $role = new Role();
       $role->name = 'gestornocolaborador';
       $role->description = 'Gestor no colaborador';
       $role->save();
       
       $role = new Role();
       $role->name = 'mandante';
       $role->description = 'mandante';
       $role->save();

    }
}
