<?php

namespace Database\Seeders;

use App\Models\PackageActivity;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PackageActivitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        PackageActivity::factory()->count(10)->create();
    }
}
