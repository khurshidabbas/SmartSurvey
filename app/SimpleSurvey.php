<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SimpleSurvey extends Model
{
	protected $fillable = ['title', 'user_id', 'question'];
}