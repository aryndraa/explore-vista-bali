<?php

namespace Database\Factories;

use App\Models\Package;
use App\Models\Shuttle;
use App\Models\Vehicle;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\ShuttleBooking>
 */
class ShuttleBookingFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'shuttle_id'      => Shuttle::query()->inRandomOrder()->first()->id,
            'customer_name'   => $this->faker->name(),
            'customer_phone'  => $this->faker->phoneNumber(),
            'customer_email'  => $this->faker->safeEmail(),
            'booking_date'    => $this->faker->date(),
            'pickup_time'     => $this->faker->time(),
            'people_amount'   => $this->faker->numberBetween(1, 10),
            'from'            => $this->faker->city(),
            'to'              => $this->faker->city(),
            'vehicle_id'      => Vehicle::query()->inRandomOrder()->first()->id,
            'package_id'      => Package::query()->inRandomOrder()->first()->id,
            'status'          => $this->faker->randomElement(['pending', 'confirmed', 'cancelled']),
        ];
    }
}
