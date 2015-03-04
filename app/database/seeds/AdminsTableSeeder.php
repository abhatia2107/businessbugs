<?php

class AdminsTableSeeder extends Seeder {

   	public function run()
   	{
		$faker = Faker\Factory::create();
		DB::table('admins')->insert(array('admin_user_id'=>1));
		DB::table('admins')->insert(array('admin_user_id'=>2));
  	}

}