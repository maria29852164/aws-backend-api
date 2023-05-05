<?php

namespace Database\Factories;

use App\Models\CarouselContent;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\CarouselContent>
 */
class CarouselContentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            CarouselContent::CAROUSEL_NAME => $this->faker->name
        ];
    }
}
