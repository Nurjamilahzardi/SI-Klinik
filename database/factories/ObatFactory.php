<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Obat>
 */
class ObatFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'kodeobat' =>$this->faker->bothify('####'),
            'namaobat' =>$this->faker->name(),
	        'kategori' =>$this->faker->text(),
            'stok' =>$this->faker->text(),
            'expired' =>$this->faker->date()
        ];
    }
}
