<?php

namespace Database\Seeders;

use App\Models\ShuttleVehicle;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ShuttleVehicleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        ShuttleVehicle::factory()->count(20)->create();
    }
}
