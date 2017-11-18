<?php

use App\SimpleSurvey;
use App\User;
use Illuminate\Database\Seeder;

class SimpleSurveysTableSeeder extends Seeder
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
			SimpleSurvey::create([
				'user_id' => $faker->randomElement($user_ids),
				'title' => $faker->sentence,
				'question' => $faker->paragraph,
			]);
		}
	}
}