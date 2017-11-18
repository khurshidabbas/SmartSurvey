<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		$this->call(SimpleSurveysTableSeeder::class);
		$this->call(SimpleSurveyResponsesTableSeeder::class);
		$this->call(CustomSurveysTableSeeder::class);
		$this->call(CustomSurveyResponsesTableSeeder::class);
	}
}