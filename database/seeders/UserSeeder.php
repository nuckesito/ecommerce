<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {   //1
        $usuario = User::create([
            'name'=>'Jose Castro',
            'email'=>'jose@gmail.com',
            'password'=>Hash::make('12345678'),
            'CI'=>'8231357',
            'Rol'=>'Admin',
            'Address'=>'Calle Sombrero de Sao #4280',
            'Telefono'=>'69129461',
        ]);
        //2
        $usuario = User::create([
            'name'=>'Pepito Perez',
            'email'=>'pepito@gmail.com',
            'password'=>Hash::make('12345678'),
            'CI'=>'7777777',
            'Rol'=>'Recadero',
            'Address'=>'Calle 24 de Septiembre #7777',
            'Telefono'=>'7777777',
        ]);
         //3
         $usuario = User::create([
            'name'=>'Joaquin Chumacero',
            'email'=>'joaquin@gmail.com',
            'password'=>Hash::make('12345678'),
            'CI'=>'8888888',
            'Rol'=>'Cliente',
            'Address'=>'Plan 3000 #8888',
            'Telefono'=>'8888888',
        ]);
        //4
        $usuario = User::create([
            'name'=>'Maria Galindo',
            'email'=>'maria@gmail.com',
            'password'=>Hash::make('12345678'),
            'CI'=>'9999999',
            'Rol'=>'Cliente',
            'Address'=>'Villa 1ro de Mayo #9999',
            'Telefono'=>'9999999',
        ]);


    }
}
