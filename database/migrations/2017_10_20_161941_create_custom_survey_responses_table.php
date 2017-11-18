<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCustomSurveyResponsesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('custom_survey_responses', function (Blueprint $table) {
            $table->increments('id');
	        $table->unsignedInteger('survey_id');
	        $table->foreign('survey_id')->references('id')->on('custom_surveys');
	        $table->text('option');
	        $table->unsignedInteger('votes');
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
        Schema::dropIfExists('custom_survey_responses');
    }
}
