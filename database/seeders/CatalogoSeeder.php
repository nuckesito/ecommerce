<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CatalogoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {   //1
        DB::table('catalogos')->insert([
            'name' => 'Primavera',
        ]);
        //2
        DB::table('catalogos')->insert([
            'name' => 'Verano',
        ]);
        //3
        DB::table('catalogos')->insert([
            'name' => 'Otoño',
        ]);
        //4
        DB::table('catalogos')->insert([
            'name' => 'Invierno',
        ]);
        //5
        DB::table('catalogos')->insert([
            'name' => 'Halloween',
        ]);
        //6
        DB::table('catalogos')->insert([
            'name' => 'Navidad',
        ]); 
        //7
        DB::table('catalogos')->insert([
            'name' => 'San Valentin',
        ]);
    }
}
