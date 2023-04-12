<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Survey extends Model
{
    use HasFactory;

    protected $fillable = [
        'tittle',
        'description',
        'end_survey',
    ];

    public function askSurveys()
    {
        return $this->hasMany(AskSurvey::class);
    }
}
