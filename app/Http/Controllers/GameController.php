<?php

namespace App\Http\Controllers;

use App\Http\Requests\game\StoreRequest;
use App\Models\Developer;
use App\Models\Game;
use App\Models\Genre;
use App\Models\Platform;

class GameController extends Controller
{
  public function index()
  {
    $games = Game::all();
    return view('game.index', compact('games'));
  }

  public function show($id)
  {
    $game = Game::findOrFail($id);
    $developer = Game::find($game->developer_id)->developer;
    $genres = Game::find($game->id)->genres;
    $platforms = Game::find($game->id)->platforms;
    return view('game.show',
      compact(
        'game',
        'developer',
        'genres',
        'platforms'
      )
    );
  }

  public function create()
  {
    $genres = Genre::all();
    $developers = Developer::all();
    $platforms = Platform::all();
    return view('game.create',
      compact(
        'genres',
        'developers',
        'platforms'
      )
    );
  }

  public function store(StoreRequest $request)
  {
    $genres = Genre::whereIn('id', $request['genre'])->get();
    $platforms = Platform::whereIn('id', $request['platform'])->get();
    $game = Game::create($request->all());
    $game->platforms()->attach($platforms);
    $game->genres()->attach($genres);
    return redirect()->route('game.show', $game->id);
  }

  public function edit(Game $game)
  {
    $genres = Genre::all();
    $gameGenres = Game::find($game->id)->genres;
    $platforms = Platform::all();
    $gamePlatforms = Game::find($game->id)->platforms;
    $developers = Developer::all();
    return view('game.edit',
      compact(
        'game',
        'genres',
        'gameGenres',
        'platforms',
        'gamePlatforms',
        'developers'
      ));
  }

  public function update(StoreRequest $request, Game $game)
  {
    $genres = Genre::whereIn('id', $request['genre'])->get();
    $platforms = Platform::whereIn('id', $request['platform'])->get();
    $game->update($request->all());
    $game->genres()->delete();
    $game->genres()->attach($genres);

//    $game->platforms()->delete();
//    $game->platforms()->attach($platforms);
    return redirect()->route('game.show', $game->id);
  }

  public function destroy(Game $game)
  {
    $game->delete();
    return redirect()->route('game.index');
  }

}
