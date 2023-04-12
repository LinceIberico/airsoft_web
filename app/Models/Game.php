<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Game extends Model
{
    use HasFactory;

    protected $fillable = [
        'game_category_id',
        'name',
        'description',
        'rules',
        'equipment',
        'start_game',
        'end_game',
        'price',
        'place',
        'club_photo',
    ];

    public function gameCategory()
    {
        return $this->hasOne(GameCategory::class);
    }

    public function gameUsers()
    {
        return $this->hasMany(GameUser::class);
    }
}
