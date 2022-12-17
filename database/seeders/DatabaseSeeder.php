<?php

namespace Database\Seeders;

use App\Models\Developer;
use App\Models\Game;
use App\Models\Genre;
use App\Models\Platform;
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
      $platforms = Platform::factory(10)->create();
      $games = Game::factory(100)->create();


      foreach ($games as $game){
        $genreId = $genre->random(3)->pluck('id');
        $game->genres()->attach( $genreId );

        $platformsId = $platforms->random(3)->pluck('id');
        $game->platforms()->attach( $platformsId );
      }

      foreach ($games as $game){

      }
    }
}
