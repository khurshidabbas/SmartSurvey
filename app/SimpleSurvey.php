<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\SimpleSurvey
 *
 * @mixin \Eloquent
 */
class SimpleSurvey extends Model
{
	protected $fillable = ['title', 'user_id', 'question'];
}