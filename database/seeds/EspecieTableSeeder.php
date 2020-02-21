<?php

use Illuminate\Database\Seeder;
use App\Especie;

class EspecieTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $especies = array("AVENA","CARTAMO","CEBADA","GARBANZO","GUISANTE","HABA",
            "HABONCILLO","TRIGO BLAN","TRIGO DURO","TRITICALE");
 
        foreach ($especies as $especie){
            Especie::create([
                'codigo' => strtoupper(mb_substr($especie,0,3)), //Evito el problema de las tildes.
                'nombre' => $especie
              ]);
        }
    }
}
