<?php

namespace Database\Seeders;

use App\Models\PackagePlace;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PackagePlaceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        PackagePlace::factory()->count(10)->create();
    }
}
