<?php

namespace Database\Seeders;

use Illuminate\Database\Eloquent\Factories\Factory;

use App\database\factories\UserFactory;
use App\Models\User;
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

        $this->call([
            UserSeeder::class,
            ClienteSeeder::class,
            ProveedorSeeder::class,
            ProyectoSeeder::class,
            AnticipoSeeder::class,
            PagoSeeder::class,

        ]);
       
       


        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
