<?php

namespace App\Http\Controllers;

use App\Models\Genre;

class GenrePageController extends Controller {
  public function index() {
    $genres = Genre::all();
    return view('genre.index', compact('genres'));
  }

  public function show($id) {
    $genre = Genre::findOrFail($id);

    return view('genre.show', compact('genre'));
  }

}
