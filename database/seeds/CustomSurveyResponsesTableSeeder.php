<?php

use App\CustomSurvey;
use App\CustomSurveyResponse;
use Illuminate\Database\Seeder;

class CustomSurveyResponsesTableSeeder extends Seeder
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
		
		$survey_ids = CustomSurvey::all()->pluck('id')->toArray();
		
		for ($i = 0; $i < 50; $i++) {
			CustomSurveyResponse::create([
				'survey_id' => $faker->randomElement($survey_ids),
				'option' => $faker->paragraph,
				'votes' => $faker->randomNumber(),
			]);
		}
	}
}