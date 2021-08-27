<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */

    public function run()
    {
        // \App\Models\User::factory(10)->create();
        /*$admin = new \App\Models\Administrador();
        $admin->usuario = 'admin';
        $admin->nombre = 'Moises Zapata de la Cruz';
        $admin->email = 'moyzapata99@gmail.com';
        $admin->password = Hash::make('administrador');
        $admin->save();*/
        $cliente = new \App\Models\clientes();
        $cliente->usuario = 'pruebas';
        $cliente->nombre = 'Moises Zapata';
        $cliente->email = 'moyzapata99@gmail.com';
        $cliente->telefono = '9989370987';
        $cliente->password = Hash::make('administrador');
        $cliente->direccion = 'conocida';
        $cliente->colonia = 'centro';
        $cliente->ciudad = 'ocosingo';
        $cliente->municipio = 'ocosingo';
        $cliente->estado = 'chiapas';
        $cliente->save();
    }
}
