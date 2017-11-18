<?php

use App\SimpleSurvey;
use App\SimpleSurveyResponse;
use Illuminate\Database\Seeder;

class SimpleSurveyResponsesTableSeeder extends Seeder
{
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		$faker = \Faker\Factory::create();
		
//		$survey_ids = DB::table('simple_surveys')->pluck('id')->toArray();
		
		$survey_ids = SimpleSurvey::all()->pluck('id')->toArray();
		
		for ($i = 0; $i < 50; $i++) {
			SimpleSurveyResponse::create([
				'survey_id' => $faker->randomElement($survey_ids),
				'message' => $faker->paragraph,
			]);
		}
	}
}