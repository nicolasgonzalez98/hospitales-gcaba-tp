<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Hospital;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Hospital>
 */
class HospitalFactory extends Factory
{   

    protected $model = Hospital::class;

    public function definition(): array {
        return [
            'nombre' => $this->faker->company . ' Hospital',
            'especialidad' => $this->faker->randomElement(['Pediatría', 'Cardiología', 'Neurología', 'Traumatología']),
            'atencion' => $this->faker->sentence(),
            'direccion' => $this->faker->address(),
            'barrio' => $this->faker->city(),
            'comuna' => $this->faker->numberBetween(1, 15),
            'telefono' => $this->faker->optional()->phoneNumber(),
            'fax' => $this->faker->optional()->phoneNumber(),
            'sitio_web' => $this->faker->optional()->url(),
            'gestion' => $this->faker->randomElement(['Ministerio de Salud', 'Privado']),
            'geometria' => $this->faker->latitude() . ', ' . $this->faker->longitude(),
        ];
    }
}
