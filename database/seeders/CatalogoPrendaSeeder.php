<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CatalogoPrendaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //1
        DB::table('catalogos_prendas')->insert([
            'id_catalogo' => 2,
            'id_prenda' => 1,
        ]);
        //2
        DB::table('catalogos_prendas')->insert([
            'id_catalogo' => 1,
            'id_prenda' => 2,
        ]);
    }
}
