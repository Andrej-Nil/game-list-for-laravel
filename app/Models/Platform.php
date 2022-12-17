<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Platform extends Model
{
    use HasFactory;
  protected $table = 'platforms';
  protected $fillable = [
    'title',
    'description'
  ];

  public function games() {
    return $this->belongsToMany(Game::class);
  }
  public function getGameRecommendAttribute() {
    return $this->games()->limit(3)->get();
  }
}
