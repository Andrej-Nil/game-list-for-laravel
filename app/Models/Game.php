<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Game extends Model
{
  use HasFactory;
  use SoftDeletes;

  protected $table = 'games';
  protected $fillable = [
    'title',
    'description',
    'developer_id',
    'date'
  ];

  public function genres()
  {
    return $this->belongsToMany(Genre::class, 'game_genre', 'game_id');
  }

  public function developer()
  {
    return $this->hasOne(Developer::class, 'id');
  }

  public function platforms()
  {
    return $this->belongsToMany(Platform::class, 'game_platform', 'game_id');
  }

}
