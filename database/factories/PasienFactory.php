<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Pasien>
 */
class PasienFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'idpasien' =>$this->faker->bothify('##########'),
            'namapasien' =>$this->faker->name(),
	        'dokter_id' =>mt_rand(1,2),
            'jenis_kelamin' =>$this->faker->randomElement(['L','P']),
            'penyakit' =>$this->faker->text(),
	        'alamat' =>$this->faker->address()
        ];
    }
}
