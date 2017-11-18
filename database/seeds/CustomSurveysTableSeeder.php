<?php

use App\CustomSurvey;
use App\User;
use Illuminate\Database\Seeder;

class CustomSurveysTableSeeder extends Seeder
{
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		$faker = \Faker\Factory::create();
		
		$user_ids = User::all()->pluck('id')->toArray();
		
		for ($i = 0; $i < 50; $i++) {
			CustomSurvey::create([
				'user_id' => $faker->randomElement($user_ids),
				'title' => $faker->sentence,
				'question' => $faker->paragraph,
			]);
		}
	}
}