<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Universite>
 */
class UniversiteFactory extends Factory
{
    /**<
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name(),
            'description' => $this->faker->realText(200),
            'location' => $this->faker->city(),
            'imagePath' => $this->faker->word(),
            'pdfFilePath' => $this->faker->word(),
        ];
    }
}