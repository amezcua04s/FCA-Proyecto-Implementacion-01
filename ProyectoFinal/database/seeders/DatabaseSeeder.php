<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Proveedor;
use App\Models\Cliente;
use App\Models\Proyecto;
use App\Models\Anticipo;
use App\Models\Pago;


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
            'admin' => true,
            'super' => true,
        ]);
        User::create([
            'name' => 'User',
            'paterno' => 'User',
            'materno' => 'as',
            'email' => 'santiago@gmail.com',
            'password' => bcrypt('12345678'),
            'admin' => false,
            'super' => false,

        ]);

        Proveedor::create([
            'razon' => 'Proveedor 1',
            'persona' => 'Física',
            'rfc' => 'PROV123456789',
            'domicilio' => 'Calle 123',
            'email' => 'ejemplo@hotmail.com',
            'telefono' => '1234567890',
        ]);

        Cliente::create([
            'razon' => 'Cliente 1',
            'persona' => 'Física',
            'rfc' => 'CLIE123456789',
            'domicilio' => 'Calle 123',
            'email' => 'hola@ejemplo.com',  
            'telefono' => '1234567890',
        ]);

        Proyecto::create([
            'nombre' => 'Proyecto 1',
            'concepto' => 'Descripción del proyecto 1',
            'inicio' => '2024-11-27',
            'fin' => '2024-11-27',
            'subtotal' => 1000,
            'iva' => 160,
            'total' => 1160,
            'pagado' => 100,
            'anticipado'=> 100,
            'comentarios' => 'Comentarios del proyecto 1',
        ]);

        Anticipo::create([
            'proyecto' => 1,
            'cliente' => 1,
            'fecha' => '2024-11-27',
            'monto' => 100,
            'metodo' => 'transferencia',
            'referencia' => '1234567890',
        ]);

        Pago::create([
            'proyecto' => 1,
            'proveedor' => 1,
            'fecha' => '2024-11-27',
            'monto' => 100,
            'metodo' => 'transferencia',
            'referencia' => '1234567890',
        ]);



        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
