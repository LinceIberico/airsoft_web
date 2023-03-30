<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Club extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'city',
        'club_photo',
    ];

    public function user()
    {
        return $this->belongsToMany(User::class);
    }
}
