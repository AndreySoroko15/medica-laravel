<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Category>
 */
class CategoryFactory extends Factory
{
    public function definition(): array
    {
        return [
            'title' => mb_ucfirst(preg_replace('/[^a-zA-Z\s]/', '', $this->faker->words(rand(1, 2), true))),
        ];
    }
}
