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
    'release_date',
    'release_month',
    'release_year',
  ];

  public function genres()
  {
    return $this->belongsToMany(Genre::class, 'game_genre', 'game_id');
  }

  public function developer()
  {
    return $this->hasOne(Developer::class, 'id');
  }

}
