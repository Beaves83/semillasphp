<?php

use Illuminate\Database\Seeder;
use App\Zona;

class ZonaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       $zona = new Zona();
       $zona->codigo = 'Z1';
       $zona->nombre = 'Zona 1';
       $zona->tipocultivo = 0;
       $zona->descripcion = 'Secano: Menor o igual a 2.200';
       $zona->save();
       
       $zona = new Zona();
       $zona->codigo = 'Z2';
       $zona->nombre = 'Zona 2';
       $zona->tipocultivo = 0;
       $zona->descripcion = 'Secano: Entre 2.220 y 3.200';
       $zona->save();
       
       $zona = new Zona();
       $zona->codigo = 'Z3';
       $zona->nombre = 'Zona 3';
       $zona->tipocultivo = 0;
       $zona->descripcion = 'Secano: Mayor o igual a 3.200';
       $zona->save();
       
       $zona = new Zona();
       $zona->codigo = 'Z4';
       $zona->nombre = 'Zona 4';
       $zona->tipocultivo = 1;
       $zona->descripcion = 'Regadío';
       $zona->save();
    }
}
