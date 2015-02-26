<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class MagazinesTableSeeder extends Seeder {

	public function run()
	{
		$faker = Faker::create();

		foreach(range(1, 10) as $index)
		{
			Magazine::create([
				'magazine' => $faker->Name,
				'magazine_price' =>$faker->randomNumber(1000,5000),
			]);
		}
	}

}
