<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Proveedor;
use App\Models\Cliente;
use App\Models\Proyecto;


// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::create([
            'name' => 'Admin',
            'paterno' => 'Admin',
            'materno' => 'as',
            'email' => 'admin@example.com',
            'password' => bcrypt('password'),
            'activo' => true,
            'admin' => true,
        ]);

        Proveedor::create([
            'razon' => 'Proveedor 1',
            'persona' => 'Física',
            'rfc' => 'PROV123456789',
            'domicilio' => 'Calle 123',
            'email' => 'ejemplo@hotmail.com',
            'telefono' => '1234567890',
            'activo' => true,
        ]);

        Cliente::create([
            'razon' => 'Cliente 1',
            'persona' => 'Física',
            'rfc' => 'CLIE123456789',
            'domicilio' => 'Calle 123',
            'email' => 'hola@ejemplo.com',  
            'telefono' => '1234567890',
            'activo' => true,
        ]);

        Proyecto::create([
            'nombre' => 'Proyecto 1',
            'concepto' => 'Descripción del proyecto 1',
            'fecha_inicio' => '2024-11-27',
            'fecha_fin' => '2024-11-27',
            'activo' => true,
            'subtotal' => 1000,
            'iva' => 160,
            'total' => 1160,
            'comentarios' => 'Comentarios del proyecto 1',
        ]);



        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
