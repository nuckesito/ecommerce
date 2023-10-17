<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use illuminate\Support\Facades\DB;

class PrendaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //1
        DB::table('prendas')->insert([
            'name' => 'Blusa Prada Negro',
            'description' => 'Blusa Prada de color Negro especial para salidas nocturnas',
            'color' => 'Negro',
            'price' => 50,
            'stock'=>15,
            'image_path' => '\images\blusa_negro.png',
            'id_categoria' => 1,
            'id_marca' => 7,
        ]);
        //2
        DB::table('prendas')->insert([
            'name' => 'Blusa Valentino Blanco',
            'description' => 'Blusa Valentino de color blanco, especial para oficina',
            'color' => 'Blanco',
            'price' => 60,
            'stock'=> 20,
            'image_path' => '\images\blasa_blanco.png',
            'id_categoria' => 1,
            'id_marca' => 10,
        ]);
    }
}
