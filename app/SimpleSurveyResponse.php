<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\SimpleSurveyResponse
 *
 * @mixin \Eloquent
 */
class SimpleSurveyResponse extends Model
{
	protected $fillable = ['survey_id', 'message'];
}
