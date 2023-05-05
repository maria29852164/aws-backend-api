<?php

namespace Database\Factories;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Collection;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            Product::PRODUCT_NAME => $this->faker->name(),
            Product::PRODUCT_IMG => $this->faker->imageUrl,
            Product::PRODUCT_DESCRIPTION => $this->faker->text(5),
            Product::PRODUCT_LINK_AWS => $this->faker->url

        ];
    }

}
