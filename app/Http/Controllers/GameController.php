<?php

namespace App\Http\Controllers;

use App\Helper\DataHelper;
use App\Http\Requests\StoreRequest;
use App\Models\Developer;
use App\Models\Game;
use App\Models\Genre;

class GameController extends Controller {
  public function index() {
    $games = Game::all();
    return view('game.index', compact('games'));
  }

  public function show($id) {
    $game = Game::findOrFail($id);
    $developer = Game::find($game->developer_id)->developer;
    $genres = Game::find($game->id)->genres;
    return view('game.show', compact('game', 'developer', 'genres'));
  }

  public function create() {
    $genres = Genre::all();
    $developers = Developer::all();
    return view('game.create',
      compact(
        'genres',
        'developers'
      )
    );
  }

  public function store(StoreRequest $request) {
    $genres = Genre::whereIn('id', $request['genre'])->get();
    $game = Game::create($request->all());
    $game->genres()->attach($genres);
    return redirect()->route('game.show',$game->id );
  }


  public function edit(Game $game) {
    return view('game.edit', compact('game'));
  }

  public function update(Game $game) {
    $data = request()->validate([
      'title' => 'string',
      'description' => 'string',
      'developer' => 'string',
    ]);
    $game->update($data);
    return redirect()->route('game.show', $game->id);
  }

  public function destroy(Game $game) {
    $game->delete();
    return redirect()->route('game.index');
  }

}
