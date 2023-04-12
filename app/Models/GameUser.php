<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GameUser extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'game_id',
    ];

    public function users()
    {
        return $this->belongsToMany(User::class);
    }

    public function games()
    {
        return $this->belongsToMany(Game::class);
    }
}
