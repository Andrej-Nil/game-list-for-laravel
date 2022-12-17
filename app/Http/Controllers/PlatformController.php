<?php

namespace App\Http\Controllers;


use App\Models\Platform;

class PlatformController extends Controller
{
  public function index()
  {
    $platforms = Platform::all();
    return view('admin.platform.index', compact('platforms'));
  }

  public function create()
  {
    return view('admin.platform.create');
  }

  public function store()
  {
    $data = request()->validate([
      'title' => 'string',
      'description' => 'string',
    ]);
    $platform = Platform::create($data);
    return redirect()->route('admin.platform.show', $platform->id);
  }


  public function show($id)
  {
    $platform = Platform::findOrFail($id);
    return view('admin.platform.show', compact('platform'));
  }

  public function edit(Platform $platform)
  {
    return view('admin.platform.edit', compact('platform'));
  }

  public function update(Platform $platform)
  {
    $data = request()->validate([
      'title' => 'string',
      'description' => 'string',
    ]);
    $platform->update($data);
    return redirect()->route('admin.platform.show', $platform->id);
  }

  public function destroy(Platform $platform)
  {
    $platform->delete();
    return redirect()->route('admin.platform.index');
  }

}
