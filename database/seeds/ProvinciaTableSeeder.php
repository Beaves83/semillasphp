<?php

use Illuminate\Database\Seeder;
use App\Provincia;

class ProvinciaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Falta asignar la CCAA
        $provincias = array("Alava","Albacete","Alicante","Almería","Asturias","Avila","Badajoz","Barcelona","Burgos","Cáceres",
        "Cádiz","Cantabria","Castellón","Ciudad Real","Córdoba","La Coruña","Cuenca","Gerona","Granada","Guadalajara",
        "Guipúzcoa","Huelva","Huesca","Islas Baleares","Jaén","León","Lérida","Lugo","Madrid","Málaga","Murcia","Navarra",
        "Orense","Palencia","Las Palmas","Pontevedra","La Rioja","Salamanca","Segovia","Sevilla","Soria","Tarragona",
        "Santa Cruz de Tenerife","Teruel","Toledo","Valencia","Valladolid","Vizcaya","Zamora","Zaragoza");
 
        foreach ($provincias as $provincia){
            Provincia::create([
                'id_pais' => 60, //España
                //'id_comunidadautonoma' => 8,
                'codigo' => strtoupper(mb_substr($provincia,0,4)), //Evito el problema de las tildes.
                'nombre' => $provincia
              ]);
        }
    }
}
