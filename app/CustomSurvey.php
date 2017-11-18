<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CustomSurvey extends Model
{
	protected $fillable = ['title', 'user_id', 'question'];
}