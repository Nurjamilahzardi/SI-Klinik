<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Perawat>
 */
class PerawatFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'nip' =>$this->faker->bothify('##########'),
            'namaperawat' =>$this->faker->name(),
            'alamat' =>$this->faker->address(),
            'jenis_kelamin' =>$this->faker->randomElement(['L','P']),
            'notelp' =>$this->faker->bothify('############')
        ];
    }
}
