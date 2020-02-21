<?php

use Illuminate\Database\Seeder;
use App\Royalty;

class RoyaltyTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       $royalty = new Royalty();
       $royalty->id_campana = 1;
       $royalty->precioqm = 1.3;
       $royalty->save();
       
       $royalty = new Royalty();
       $royalty->id_campana = 2;
       $royalty->precioqm = 1.5;
       $royalty->save();
       
       $royalty = new Royalty();
       $royalty->id_campana = 3;
       $royalty->precioqm = 2;
       $royalty->save();
       
       $royalty = new Royalty();
       $royalty->id_campana = 4;
       $royalty->precioqm = 2.3;
       $royalty->save();
    }
}
