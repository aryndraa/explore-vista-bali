<?php

namespace Database\Factories;

use App\Models\Package;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\TourBooking>
 */
class TourBookingFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'package_id'     => Package::query()->inRandomOrder()->first()->id,
            'customer_name'  => $this->faker->name(),
            'customer_phone' => $this->faker->phoneNumber(),
            'customer_email' => $this->faker->safeEmail(),
            'booking_date'   => $this->faker->date(),
            'people_amount'  => $this->faker->numberBetween(1, 10),
            'status'         => $this->faker->randomElement(['pending', 'confirmed', 'cancelled'])
        ];
    }
}
