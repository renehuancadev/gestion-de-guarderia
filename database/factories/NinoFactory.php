<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Nino;
use App\Models\Tutor;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Niño>
 */
class NinoFactory extends Factory
{
    protected $model = Nino::class;


    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nombre' => $this->faker->firstName(),
            'fecha_nacimiento' => $this->faker->date($format = 'Y-m-d', $max = 'now'),
            'tutor_id' => Tutor::factory(),
        ];
    }
}
