<?php

namespace Database\Factories;

use App\Models\Shuttle;
use App\Models\Vehicle;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\ShuttleVehicle>
 */
class ShuttleVehicleFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'start_price' => $this->faker->numberBetween(1000, 10000),
            'shuttle_id' => Shuttle::query()->inRandomOrder()->first()->id,
            'vehicle_id' => Vehicle::query()->inRandomOrder()->first()->id,
        ];
    }
}
