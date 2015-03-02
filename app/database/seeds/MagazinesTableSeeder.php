<?php

class MagazinesTableSeeder extends Seeder {

	public function run()
	{
		Magazine::create([
			'magazine' => 'February',
			'magazine_price' =>'40',
		]);

		Magazine::create([
			'magazine' => 'Annual Subscription',
			'magazine_price' =>'480 38% OFF 300',
		]);
	}

}
