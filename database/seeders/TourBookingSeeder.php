<?php

namespace Database\Seeders;

use App\Models\Tour;
use App\Models\TourBooking;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TourBookingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        TourBooking::factory()->count(100)->create();
    }
}
