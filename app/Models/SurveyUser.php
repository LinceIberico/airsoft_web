<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SurveyUser extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'survey_id',
    ];

    public function surveys()
    {
        return $this->belongsToMany(Survey::class);
    }

    public function users()
    {
        return $this->belongsToMany(User::class);
    }
}
