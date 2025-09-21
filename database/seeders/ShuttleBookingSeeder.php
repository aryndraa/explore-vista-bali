<?php

namespace Database\Seeders;

use App\Models\ShuttleBooking;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ShuttleBookingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        ShuttleBooking::factory()->count(100)->create();
    }
}
