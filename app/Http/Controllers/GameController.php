<?php

namespace App\Http\Controllers;

use App\Models\Developer;
use App\Models\Game;
use App\Models\Genre;
use Illuminate\Http\Request;

class GameController extends Controller {
  public function index() {
    $games = Game::all();
    return view('game.index', compact('games'));
  }

  public function show($id) {
    $game = Game::findOrFail($id);
    return view('game.show', compact('game'));
  }

  public function create() {
    $genres = Genre::all();
    $developers = Developer::all();
    return view('game.create', compact('genres', 'developers'));
  }

  public function store() {
    $data = request()->validate([
      'title' => 'string',
      'description' => 'string',
      'developer_id' => '',
      'genre' => 'array'
    ]);
    $genres = Genre::whereIn('id', $data['genre'])->get();
    dd( $genres);
    $game = Game::create($data);
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
