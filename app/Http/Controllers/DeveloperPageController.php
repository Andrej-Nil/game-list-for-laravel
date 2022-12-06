<?php

namespace App\Http\Controllers;

use App\Http\Resources\GenreResource;
use App\Models\Genre;

class DeveloperPageController extends Controller {
  public function index() {
//    $genres = Genre::with('games')->withCount('games')->paginate(20);

    return view('developer.index', );
  }


  public function show($id) {
//    $genre = Genre::findOrFail($id);
//
    return view('developer.show');
  }

}
