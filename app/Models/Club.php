<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Club extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'city',
        'club_photo',
        'active',
    ];

    public function users()
    {
        return $this->belongsToMany(User::class);
    }
}
