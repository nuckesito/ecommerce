<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TallaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {   //1
        DB::table('tallas')->insert([
            'name' => 'XS',
        ]);
        //2
        DB::table('tallas')->insert([
            'name' => 'S',
        ]);
        //3
        DB::table('tallas')->insert([
            'name' => 'M',
        ]);
        //4
        DB::table('tallas')->insert([
            'name' => 'L',
        ]);
        //5
        DB::table('tallas')->insert([
            'name' => 'XL',
        ]);
        //6
        DB::table('tallas')->insert([
            'name' => 'XXL',
        ]);
        //7
        DB::table('tallas')->insert([
            'name' => 'XXXL',
        ]);
    }
}
