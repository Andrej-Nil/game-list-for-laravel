<?php

namespace App\Http\Controllers;

use App\Http\Resources\GenreResource;
use App\Models\Genre;

class DeveloperPageController extends Controller {
  public function index() {
    $developers = Genre::with('games')->withCount('games')->paginate(20);
//dd($developers);
    return view('developer.index', compact('developers'));
  }


  public function show($id) {
//    $genre = Genre::findOrFail($id);
//
    return view('developer.show');
  }

}
