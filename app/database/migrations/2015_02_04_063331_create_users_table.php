<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('users',function($table){
			$table->increments('id');
			$table->string('user_first_name',50);
	        $table->string('user_last_name',50)->nullable();
			$table->string('email',50);
			$table->string('user_contact_no',15);
			$table->string('password',70);	
			$table->string('user_location',50)->nullable();
			$table->string('user_fb_id',50)->nullable();
			$table->date('user_birthdate')->nullable();	
			$table->string('user_gender',6)->nullable();
			$table->string('remember_token',255)->nullable();
			$table->string('user_facebook_access_token',511)->nullable();
			$table->string('user_confirmation_code',90);
			$table->boolean('user_confirmed')->default(0);
			$table->boolean('user_subscription_token')->default(1);
	        $table->boolean('user_photo')->default(0);
	        $table->softDeletes();
			$table->timestamp('created_at')->default(DB::raw('CURRENT_TIMESTAMP'));
			$table->timestamp('updated_at');
 		});
 		//user profile photo would be store as user_id.jpg so no need for separate column.
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('users');
	}

}
