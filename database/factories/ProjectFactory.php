<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Project>
 */
class ProjectFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'project_title' => $this->faker->sentence,
            'project_description' => $this->faker->paragraph,
            'project_category' => $this->faker->word,
            'client_name' => $this->faker->name,
        ];
    }
}
