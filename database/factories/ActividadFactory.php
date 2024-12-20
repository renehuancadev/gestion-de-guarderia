<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Actividad;
use App\Models\Nino;
use App\Models\TipoActividad;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class ActividadFactory extends Factory
{
    protected $model = Actividad::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nino_id' => Nino::factory(),
            'tipo_actividad_id' => TipoActividad::factory(),
            'descripcion' => $this->faker->sentence,
            'fecha' => $this->faker->date(),
        ];
    }
}
