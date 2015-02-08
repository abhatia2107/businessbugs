<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class SubscriptionsTableSeeder extends Seeder {

	public function run()
	{
		$faker = Faker::create();
		foreach(range(1,30) as $index)
		{
			DB::table('subscriptions')->insert(array(
				'subscription_email'=>$faker->unique()->email,
			));
		}
	}

}