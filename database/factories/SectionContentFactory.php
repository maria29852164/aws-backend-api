<?php

namespace Database\Factories;

use App\Models\SectionContent;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\SectionContent>
 */
class SectionContentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            SectionContent::SECTION_DESCRIPTION => $this->faker->name,
            SectionContent::SECTION_TITLE => $this->faker->slug,
            SectionContent::SECTION_BUTTON_TITLE => $this->faker->slug(4),
        ];
    }
}
