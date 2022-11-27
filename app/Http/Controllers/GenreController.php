<?php

namespace App\Http\Controllers;

use App\Models\Game;
use App\Models\Genre;
use Illuminate\Http\Request;

class GenreController extends Controller {
  public function index() {
    $genres = Genre::all();
    return view('admin.genre.index', compact('genres'));
  }

  public function show($id) {
    $genre = Genre::findOrFail($id);
    return view('admin.genre.show', compact('genre'));
  }

  public function create() {
    return view('admin.genre.create');
  }

  public function store() {
    $data = request()->validate([
      'title' => 'string',
      'description' => 'string',
    ]);
//    dd($data);
    $genre = Genre::create($data);
    return redirect()->route('admin.genre.show', $genre->id );
  }


  public function edit(Genre $genre) {
    return view('admin.genre.edit', compact('genre'));
  }

  public function update(Genre $genre) {
    $data = request()->validate([
      'title' => 'string',
      'description' => 'string',
    ]);
    $genre->update($data);
    return redirect()->route('admin.genre.show', $genre->id);
  }

  public function destroy(Genre $genre) {
    $genre->delete();
    return redirect()->route('admin.genre.index');
  }

}
