<?php

namespace App\Http\Controllers;

use App\Http\Resources\GenreResource;
use App\Models\Platform;

class PlatformPageController extends Controller {
  public function index() {
    $platforms = Platform::with('games')->withCount('games')->paginate(20);
    return view('platform.index', compact('platforms'));
  }


  public function show($id) {
    $platform = Platform::with('games')->findOrFail($id);
    return view('platform.show', compact('platform'));
  }

}
