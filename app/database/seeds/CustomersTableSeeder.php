<?php

class CustomersTableSeeder extends Seeder {

   	public function run()
   	{
		$faker = Faker\Factory::create();
		DB::table('customers')->insert(array('customer_user_id'=>1));
		DB::table('customers')->insert(array('customer_user_id'=>2));
		DB::table('customers')->insert(array('customer_user_id'=>3));
  	}

}