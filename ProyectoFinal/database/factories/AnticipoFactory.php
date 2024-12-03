<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

use App\Models\Proyecto;
use App\Models\Cliente;
use App\Models\Anticipo;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Anticipo>
 */
class AnticipoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {

        return [
            'proyecto_id' => $this->faker->numberBetween(1, 9),
            'cliente_id' => $this->faker->numberBetween(1, 9),
            'fecha' => $this->faker->date(),
            'monto' => $this->faker->randomFloat(2, 1000, 9000),
            'metodo' => $this->faker->randomElement(['Deposito', 'Transferencia']),
            'referencia' => $this->faker->text(30),
        ];
    }
}
