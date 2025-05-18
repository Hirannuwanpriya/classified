<?php

namespace Database\Factories;

use App\Models\Advertisement;
use App\Models\AdvertisementCategory;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Advertisement>
 */
class AdvertisementFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => $this->faker->sentence,
            'slug' => $this->faker->slug,
            'category_id' => AdvertisementCategory::factory(),
            'content' => $this->faker->text(1000),
            'opening_hours' => $this->faker->time('H:i') . ' - ' . $this->faker->time('H:i'),
            'location' => $this->faker->address,
            'website_url' => $this->faker->url,
            'status' => $this->faker->numberBetween(0, 1),
            'published_at' => $this->faker->dateTime,
            'modified_at' => $this->faker->dateTime,
        ];
    }
}
