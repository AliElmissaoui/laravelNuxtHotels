<?php

namespace Database\Seeders;

use App\Models\Hotel;
use App\Models\User;
use App\Models\HotelPhoto;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory()->count(10)->create();
        Hotel::factory()
            ->has(HotelPhoto::factory()->count(3))
            ->count(10)
            ->create();
       
    }
    
}
