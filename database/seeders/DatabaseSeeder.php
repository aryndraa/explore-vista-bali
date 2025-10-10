<?php

namespace Database\Seeders;

use App\Models\ShuttleVehicle;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            PlaceSeeder::class,
            TourSeeder::class,
            PackageSeeder::class,
            PackageDestinationSeeder::class,
            PackageFeatureSeeder::class,
            PackageActivitySeeder::class,
            VehicleSeeder::class,
            TourBookingSeeder::class,
            ShuttleSeeder::class,
            ShuttleVehicle::class,
            ShuttleBookingSeeder::class,
            GallerySeeder::class,
            VehicleRentalSeeder::class,
            AgentSeeder::class,
            BlogSeeder::class,
            TestimonialSeeder::class,
        ]);
    }
}
