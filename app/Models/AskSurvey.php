<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AskSurvey extends Model
{
    use HasFactory;

    protected $fillable = [
        'ask_id',
        'survey_id',
    ];

    public function asks()
    {
        return $this->belongsToMany(Ask::class);
    }

    public function surveys()
    {
        return $this->belongsToMany(Survey::class);
    }
}
