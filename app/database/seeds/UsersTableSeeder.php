<?php
 
class UsersTableSeeder extends Seeder {

       public function run()
       {
              $faker = Faker\Factory::create();
              $faker->addProvider(new Faker\Provider\en_US\Person($faker));
       
              DB::table('users')->insert(array(
              'user_first_name' => "Shivam",
              'user_last_name' => "Trehan",
              'email' => "shivamtrehan55@gmail.com",
              'user_contact_no' => "+919218189999",
              'password' => Hash::make('shivamtrehan'),
              'user_location'=>"Hyderabad",
              'user_gender'=>"male",
              'user_confirmed' =>true,
              'user_subscription_token' =>true,
              ));
       
              DB::table('users')->insert(array(
              'user_first_name' => "Abhishek",
              'user_last_name' => "Bhatia",
              'email' => "abhatia2107@gmail.com",
              'user_contact_no' => "9729725987",
              'password' => Hash::make('abhishek'),
              'user_location'=>"Kurukshetra",
              'user_gender'=>"male",
              'user_confirmed' =>true,
              'user_subscription_token' =>true,
              ));
              
              foreach(range(1,30) as $index)
              {
                     DB::table('users')->insert(array(
                     'user_first_name' => $faker->firstName,
                     'user_last_name' =>$faker->lastName,
                     'email' =>$faker->email,
                     'user_contact_no' => $faker->phoneNumber,
                     'password' => Hash::make('123'),
                     'user_location'=>"Hyderabad",
                     'user_fb_id' =>$faker->randomNumber(5),
                     'user_birthdate' =>$faker->date,
                     'user_gender'=>"male",
                     'remember_token'=>$faker->lexify(),
                     'user_facebook_access_token'=>$faker->lexify(),
                     'user_confirmation_code' =>$faker->randomNumber(1000000,10000000),
                     'user_confirmed' =>$faker->boolean,
                     'user_subscription_token' =>$faker->boolean,
                     'user_photo'=>"0"
                     ));
              }
       }
}
?>