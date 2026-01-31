<?php

namespace Database\Factories;

use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class ProductsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->word(),
            'reference' => 'REF-' . $this->faker->numberBetween(10 , 1000),
            'description' => $this->faker->paragraph(3),
            'price' => $this->faker->randomFloat(2 , 1 , 900),
            'stock' => $this->faker->numberBetween(1 ,100),
            'category_id' => Category::factory(),
            'image_path' => $this->faker->imageUrl(),
        ];
    }
}
