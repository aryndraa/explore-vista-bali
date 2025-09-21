<?php

namespace Database\Factories;

use App\Models\Package;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\PackageActivity>
 */
class PackageActivityFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'package_id' => Package::query()->inRandomOrder()->first()->id,
            'name' => $this->faker->sentence(),
            'duration' => $this->faker->numberBetween(1, 8),
            'additional_price' => $this->faker->randomFloat(2, 0),
        ];
    }
}
