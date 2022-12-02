<?php

namespace Database\Seeders;

use App\Models\Developer;
use Illuminate\Database\Seeder;
use Database\Seeders\DeveloperSeeder;
use Database\Seeders\GenreSeeder;
use Database\Seeders\GameSeeder;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
//        Developer::factory()->count(10);
        $this->call([
            DeveloperSeeder::class,
            GenreSeeder::class,
            GameSeeder::class
        ]);

        
    }
}
