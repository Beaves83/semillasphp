<?php

use Illuminate\Database\Seeder;

class ComunidadAutonomaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $comunidadesautonomas = array("Andalucía", "Aragón", "Canarias", "Cantabria", "Castilla y León", "Castilla-La Mancha", "Cataluña", "Ceuta", "Comunidad Valenciana", "Comunidad de Madrid", "Extremadura", "Galicia", "Islas Baleares", "La Rioja", "Melilla", "Navarra", "País Vasco", "Principado de Asturias", "Región de Murcia");
 
        foreach ($comunidadesautonomas as $comunidadautonoma){
            App\ComunidadAutonoma::create([
                'id_pais' => 60, //España
                //'id_comunidadautonoma' => 8,
                'codigo' => strtoupper(mb_substr($comunidadautonoma,0,4)), //Evito el problema de las tildes.
                'nombre' => $comunidadautonoma
              ]);
        }
    }
}
