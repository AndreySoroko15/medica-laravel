<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class BrandFactory extends Factory
{

    public function definition(): array
    {
        return [
            'title' => preg_replace('/[^a-zA-Z\s]/', '', $this->faker->company()),
            'thumbnail' => '',
        ];
    }
}
