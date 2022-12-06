<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Developer extends Model
{
    use HasFactory;
  use SoftDeletes;

  protected $table = 'developers';
  protected  $guarded = [];

  public function games(){
    return $this->belongsToMany(Game::class);
  }

  public function getGameRecommendAttribute() {
    return $this->games()->limit(3)->get();
  }

}
