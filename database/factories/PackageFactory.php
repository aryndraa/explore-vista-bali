<?php

namespace Database\Factories;

use App\Models\Tour;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Package>
 */
class PackageFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'tour_id'     => Tour::query()->inRandomOrder()->first()->id,
            'name'        => $this->faker->sentence(3),
            'description' => $this->faker->paragraph(),
            'start_time'  => $this->faker->time(),
            'price'       => $this->faker->randomFloat(2,0,0),
            'notes'       => $this->faker->optional()->sentence(),
        ];
    }
}
