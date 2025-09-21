<?php

namespace Database\Seeders;

use App\Models\Shuttle;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ShuttleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Shuttle::factory()->count(3)->create();
    }
}
