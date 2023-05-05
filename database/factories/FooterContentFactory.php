<?php

namespace Database\Factories;

use App\Models\FooterContent;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\FooterContent>
 */
class FooterContentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            FooterContent::FOOTER_TITLE => $this->faker->name,

        ];
    }
}
