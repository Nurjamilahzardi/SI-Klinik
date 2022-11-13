<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Dokter>
 */
class DokterFactory extends Factory
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
            'namadokter' =>$this->faker->name(),
            'alamat' =>$this->faker->address(),
            'spesialis' =>$this->faker->sentence(),
            'fee' =>$this->faker->sentence(),
            'jenis_kelamin' =>$this->faker->randomElement(['L','P']),
            'notelp' =>$this->faker->bothify('############')

        ];
    }
}
