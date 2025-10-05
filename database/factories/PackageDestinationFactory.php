<?php

namespace Database\Factories;

use App\Models\Package;
use App\Models\Place;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\PackageDestination>
 */
class PackageDestinationFactory extends Factory
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
            'place_id'   => Place::query()->inRandomOrder()->first()->id,
            "name"       => $this->faker->name(),
        ];
    }
}
