<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Tutor;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Tutor>
 */
class TutorFactory extends Factory
{
    protected $model = Tutor::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nombre' => $this->faker->name(),
            'telefono' => $this->faker->phoneNumber(),
        ];
    }
}
