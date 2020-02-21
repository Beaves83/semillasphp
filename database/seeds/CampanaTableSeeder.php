<?php

use Illuminate\Database\Seeder;
use App\Campana;

class CampanaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       $campana = new Campana();
       $campana->codigo = "2017/2018";
       $campana->nombre = "Campaña 2017/2018";
       $campana->fechadesde = "2017-01-01";
       $campana->fechahasta = "2017-12-31";
       $campana->save();
       
       $campana = new Campana();
       $campana->codigo = "2018/2019";
       $campana->nombre = "Campaña 2018/2019";
       $campana->fechadesde = "2018-01-01";
       $campana->fechahasta = "2018-12-31";
       $campana->save();
       
       $campana = new Campana();
       $campana->codigo = "2019/2020";
       $campana->nombre = "Campaña 2019/2020";
       $campana->fechadesde = "2019-01-01";
       $campana->fechahasta = "2019-12-31";
       $campana->save();
       
       $campana = new Campana();
       $campana->codigo = "2020/2021";
       $campana->nombre = "Campaña 2020/2021";
       $campana->fechadesde = "2020-01-01";
       $campana->fechahasta = "2020-12-31";
       $campana->pordefecto = true;
       $campana->save();
    }
}
