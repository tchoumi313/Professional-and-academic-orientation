<?php

namespace Database\Factories;

use App\Models\Faculte;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Filiere>
 */
class FiliereFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name(),
            'description' => $this->faker->realText(200),
            'faculte_id' => Faculte::factory(),
            'imagePath' => $this->faker->word(),
            'pdfFilePath' => $this->faker->word(),
        ];
    }
}