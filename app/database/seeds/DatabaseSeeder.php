<?php

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Eloquent::unguard();
		$this->call('AdminsTableSeeder');
        $this->command->info('Admins table seeded!');

		$this->call('MagazinesTableSeeder');
		$this->command->info('Magazines table seeded!');

		$this->call('UsersTableSeeder');
        $this->command->info('Admins table seeded!');

	}

}
