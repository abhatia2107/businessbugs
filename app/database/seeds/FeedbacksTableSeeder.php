<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class FeedbacksTableSeeder extends Seeder {

	public function run()
	{
		$faker = Faker::create();

		foreach(range(1,30) as $index)
		{
			Feedback::create([
				'feedback_subject'=>$faker->name,
				'feedback_user_id'=>$faker->unique()->randomNumber(1,30),
				'feedback_email'=>$faker->unique()->email,
				'feedback_description'=>$faker->text(),
				'feedback_read'=>$faker->boolean(),
			]);
		}
	}

}