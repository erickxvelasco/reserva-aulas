<?php
namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
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
        $this->call([UsersTableSeeder::class]);
        $this->call([ExpedidoSeeder::class]);
        $this->call([CargoSeeder::class]);
        $this->call([MateriaSeeder::class]);
        $this->call([GrupoSeeder::class]);
        $this->call([GestionSeeder::class]);
        $this->call([UbicacionSeeder::class]);
        $this->call([PlantaSeeder::class]);

    }
}
