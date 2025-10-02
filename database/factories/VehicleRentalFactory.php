<?php

namespace Database\Factories;

use App\Models\Vehicle;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\VehicleRental>
 */
class VehicleRentalFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'customer_name'  => $this->faker->name(),
            'customer_phone' => $this->faker->phoneNumber(),
            'customer_email' => $this->faker->optional()->safeEmail(),
            'vehicle_id'     => Vehicle::query()->inRandomOrder()->first()->id,
            'rental_date'    => $this->faker->date(),
            'return_date'    => $this->faker->date(),
            'status'         => $this->faker->randomElement(['pending', 'confirmed', 'cancelled', 'completed', 'ongoing', 'expired']),
        ];
    }
}
