<?php

namespace Database\Factories;

use App\Models\Universite;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Faculte>
 */
class FaculteFactory extends Factory
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
            'universite_id' => Universite::factory(),
            'imagePath' => $this->faker->word(),
            'pdfFilePath' => $this->faker->word(),
        ];
    }
}