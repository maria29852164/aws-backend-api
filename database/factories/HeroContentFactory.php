<?php

namespace Database\Factories;

use App\Models\HeroContent;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\HeroContent>
 */
class HeroContentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            HeroContent::HERO_TITLE => $this->faker->title(),
            HeroContent::HERO_IMG => $this->faker->imageUrl,
            HeroContent::HERO_DESCRIPTION => $this->faker->paragraph
        ];
    }
}
