<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Proyecto;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Proyecto>
 */
class ProyectoFactory extends Factory
{

    protected $model = Proyecto::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {

        $subtotal = $this->faker->randomFloat(2, 1000, 9000);
        $iva = $subtotal * 0.16;
        $total = $subtotal + $iva;
        $pagado = $this->faker->randomFloat(2, 0, $subtotal);
        $anticipado = $this->faker->randomFloat(2, 0, $subtotal);
        return [
            'nombre' => $this->faker->company(),
            'concepto' => $this->faker->text(),
            'inicio' => $this->faker->date(),
            'fin' => $this->faker->date(),
            'subtotal' => $subtotal,
            'iva' => $iva,
            'total' => $total,
            'pagado' => $pagado,
            'anticipado'=> $anticipado,
            'comentarios' => $this->faker->text(),
        ];
    }
}
