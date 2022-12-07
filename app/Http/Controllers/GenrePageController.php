<?php

namespace App\Http\Controllers;

use App\Http\Resources\GenreResource;
use App\Models\Genre;

class GenrePageController extends Controller {
  public function index() {
    $genres = Genre::with('games')->withCount('games')->paginate(20);

    return view('genre.index', compact('genres'));
  }


  public function show($id) {
    $genre = Genre::with('games')->findOrFail($id);

    return view('genre.show', compact('genre'));
  }



}
