<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ask extends Model
{
    use HasFactory;

    protected $fillable = [
        'ask',
    ];

    public function askSurveys()
    {
        return $this->hasMany(AskSurvey::class);
    }
}
