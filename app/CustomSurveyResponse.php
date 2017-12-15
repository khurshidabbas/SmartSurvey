<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\CustomSurveyResponse
 *
 * @mixin \Eloquent
 */
class CustomSurveyResponse extends Model
{
    protected $fillable = ['survey_id', 'option', 'votes'];
}
