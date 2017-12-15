<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\CustomSurvey
 *
 * @mixin \Eloquent
 */
class CustomSurvey extends Model
{
	protected $fillable = ['title', 'user_id', 'question'];
}