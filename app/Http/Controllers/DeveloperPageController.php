<?php

namespace App\Http\Controllers;

use App\Http\Resources\GenreResource;
use App\Models\Developer;
use App\Models\Genre;

class DeveloperPageController extends Controller {
  public function index() {
    $developers = Developer::with('games')->withCount('games')->paginate(20);
    return view('developer.index', compact('developers'));
  }


  public function show($id) {
    $developer = Developer::with('games')->findOrFail($id);

    return view('developer.show', compact('developer'));
  }

}
