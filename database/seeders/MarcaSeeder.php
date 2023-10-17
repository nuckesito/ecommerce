<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MarcaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {   
        //1
        DB::table('marcas')->insert([
            'name' => 'Adidas',
        ]);
        //2
        DB::table('marcas')->insert([
            'name' => 'Nike',
        ]);
        //3
        DB::table('marcas')->insert([
            'name' => 'Chanel',
        ]);
        //4
        DB::table('marcas')->insert([
            'name' => 'Louis Vuitton',
        ]);
        //5
        DB::table('marcas')->insert([
            'name' => 'Gucci',
        ]);
        //6
        DB::table('marcas')->insert([
            'name' => 'Christian Dior',
        ]);
        //7
        DB::table('marcas')->insert([
            'name' => 'Prada',
        ]);
        //8
        DB::table('marcas')->insert([
            'name' => 'Versace',
        ]);
        //9
        DB::table('marcas')->insert([
            'name' => 'Calvin Klein',
        ]);
        //10
        DB::table('marcas')->insert([
            'name' => 'Valentino',
        ]);
        //11
        DB::table('marcas')->insert([
            'name' => 'Dolce & Gabbana',
        ]);
        //12
        DB::table('marcas')->insert([
            'name' => 'Burbery',
        ]);
    }
}
