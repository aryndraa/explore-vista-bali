<?php

namespace Database\Seeders;

use App\Models\PackageDestination;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PackageDestinationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        PackageDestination::factory()->count(10)->create();
    }
}
