<?php

namespace App\Http\Controllers;

use App\Models\Genre;

class PlatformsController extends Controller {
  public function index() {
//    $genres = Genre::all();
    return view('admin.platform.index');
  }

}
