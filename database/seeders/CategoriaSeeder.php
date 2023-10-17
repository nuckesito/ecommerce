<?php

namespace Database\Seeders;

use App\Models\Categoria;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoriaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {   //1
        DB::table('categorias')->insert([
            'name' => 'Blusas',
        ]);
        //2
        DB::table('categorias')->insert([
            'name' => 'Pantalones',
        ]);
        //3
        DB::table('categorias')->insert([
            'name' => 'Vestidos',
        ]);
        //4
        DB::table('categorias')->insert([
            'name' => 'Faldas',
        ]);
        //5
        DB::table('categorias')->insert([
            'name' => 'Shorts',
        ]);
        //6
        DB::table('categorias')->insert([
            'name' => 'Poleras',
        ]);
        //7
        DB::table('categorias')->insert([
            'name' => 'Sombreros',
        ]);
    }
}
