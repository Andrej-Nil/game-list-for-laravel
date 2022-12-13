<?php

namespace Database\Seeders;

use App\Models\Developer;
use App\Models\Game;
use App\Models\Genre;
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
      Developer::factory(20)->create();
      $genre = Genre::factory(20)->create();
      $Games = Game::factory(100)->create();

      foreach ($Games as $Game){
        $genreId = $genre->random(3)->pluck('id');
        $Game->genres()->attach( $genreId );
      }
    }
}
