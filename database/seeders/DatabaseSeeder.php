<?php

namespace Database\Seeders;

use App\Models\PackageFeature;
use App\Models\User;
use App\Models\Vehicle;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
            PackagePlaceSeeder::class,
            PackageFeatureSeeder::class,
            PackageActivitySeeder::class,
            VehicleSeeder::class,
            TourBookingSeeder::class,
            ShuttleSeeder::class,
            ShuttleBookingSeeder::class,
            GallerySeeder::class
        ]);
    }
}
