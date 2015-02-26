<?php

class MagazinesTableSeeder extends Seeder {

	public function run()
	{
		Magazine::create([
			'magazine' => 'March',
			'magazine_price' =>'30',
		]);

		Magazine::create([
			'magazine' => 'Subscription',
			'magazine_price' =>'3000',
		]);
	}

}
