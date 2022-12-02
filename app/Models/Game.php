<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\Ganre;

class Game extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'games';
    protected $fillable = [
        'title',
        'description',
        'developer_id'
    ];

    public function genres() {
        return $this->belongsToMany(Genre::class);
    }

}
