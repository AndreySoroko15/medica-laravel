<?php

namespace Database\Factories;

use App\Models\Brand;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    public function definition(): array
    {
        return [
            'title' => mb_ucfirst(preg_replace('/[^a-zA-Z\s]/', '', $this->faker->words(rand(1, 3), true))),
            'thumbnail' => '',
            'price' => $this->faker->numberBetween(50, 5000),
            'brand_id' => Brand::query()->inRandomOrder()->value('id'),
        ];
    }
}
