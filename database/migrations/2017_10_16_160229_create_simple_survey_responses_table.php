<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSimpleSurveyResponsesTable extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('simple_survey_responses', function (Blueprint $table) {
			$table->increments('id');
			$table->unsignedInteger('survey_id');
			$table->foreign('survey_id')->references('id')->on('simple_surveys');
			$table->text('message');
			$table->timestamps();
		});
	}
	
	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::dropIfExists('simple_survey_responses');
	}
}
