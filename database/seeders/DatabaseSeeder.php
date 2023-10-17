<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Catalogo;
use App\Models\CatalogoPrenda;
use App\Models\Categoria;
use App\Models\Departamento;
use App\Models\Marca;
use App\Models\Prenda;
use App\Models\Talla;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call(UserSeeder::class);
        $this->call(TallaSeeder::class);
        $this->call(MarcaSeeder::class);
        $this->call(CatalogoSeeder::class);
        $this->call(CategoriaSeeder::class);
        $this->call(PrendaSeeder::class);
        $this->call(CatalogoPrendaSeeder::class);
    }
}
