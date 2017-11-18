<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SimpleSurveyResponse extends Model
{
	protected $fillable = ['survey_id', 'message'];
}
