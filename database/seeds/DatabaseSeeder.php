<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(RoleTableSeeder::class);
        $this->call(PaisTableSeeder::class);
        $this->call(EspecieTableSeeder::class);
        $this->call(CampanaTableSeeder::class);
        $this->call(RoyaltyTableSeeder::class);
        
        $this->call(ZonaTableSeeder::class);
        $this->call(ComunidadAutonomaTableSeeder::class);
        $this->call(ProvinciaTableSeeder::class);
    }
}
