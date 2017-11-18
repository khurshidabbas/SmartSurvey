<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CustomSurveyResponse extends Model
{
    protected $fillable = ['survey_id', 'option', 'votes'];
}
