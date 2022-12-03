<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use App\Models\Developer;
use App\Models\Game;
use App\Models\Genre;


class GameSeeder extends Seeder{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(){


        for($i = 0; $i<10; $i++){
            $developer = Developer::inRandomOrder()->first();
            $games = Game::create([
                'title' => Str::random(10),
                'description' => Str::random(10),
                'developer_id' => $developer->id,
            ]);

            $genreCount = Genre::count();
            $genre = Genre::inRandomOrder()->limit(rand(1, $genreCount))->get();
            $games->genres()->attach($genre);
        }


    }
}


        //'developer_id' => '',
        //'genre' => 'array'
