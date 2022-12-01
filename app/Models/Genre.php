<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\Ganre;
class Genre extends Model {
  use HasFactory;
  use SoftDeletes;

  protected $table = 'genres';
  protected $guarded = [];

  public function games() {
    return $this->belongsToMany(Game::class);
}
}
