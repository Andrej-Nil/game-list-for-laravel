<?php

namespace App\Http\Controllers;

use App\Models\Developer;
use App\Models\Genre;

class DeveloperController extends Controller {
  public function index() {
    $developers = Developer::all();
    return view('admin.developer.index', compact('developers'));
  }

  public function show($id) {
    $developer = Developer::findOrFail($id);
    return view('admin.developer.show', compact('developer'));
  }

  public function create() {
    return view('admin.developer.create');
  }

  public function store() {
    $data = request()->validate([
      'title' => 'string',
      'description' => 'string',
    ]);
//    dd($data);
    $developer = Developer::create($data);
    return redirect()->route('admin.developer.show', $developer->id );
  }


  public function edit(Developer $developer) {
    return view('admin.developer.edit', compact('developer'));
  }

  public function update(Developer $developer) {
    $data = request()->validate([
      'title' => 'string',
      'description' => 'string',
    ]);
    $developer->update($data);
    return redirect()->route('admin.developer.show', $developer->id);
  }

  public function destroy(Developer $developer) {
    $developer->delete();
    return redirect()->route('admin.developer.index');
  }

}
