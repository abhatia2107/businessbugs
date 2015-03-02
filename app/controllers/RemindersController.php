<?php

class RemindersController extends Controller {

	/**
	 * Display the password reminder view.
	 *
	 * @return Response
	 */
	public function getRemind()
	{
		return View::make('Users.forgotPassword');
	}
		
	/**
	 * Handle a POST request to remind a user of their password.
	 *
	 * @return Response
	 */
	public function postRemind()
	{
		//TO DO: Pass userID too to the user
		switch ($response = Password::remind(Input::only('email'),function($message){
	    				$message->subject('Password Reminder');
					})
				)
		{
			case Password::INVALID_USER:
				return Redirect::back()->with('failure', Lang::get($response));

			case Password::REMINDER_SENT:
				return Redirect::back()->with('success', Lang::get($response));
		}
	}

	/**
	 * Display the password reset view for the given token.
	 *
	 * @param  string  $token
	 * @return Response
	 */
	public function getReset($token = null)
	{
		if (is_null($token)) App::abort(404);
		$resetDetails=DB::table("password_reminders")->where("token",'=',$token)->get();
		// dd($resetDetails[0]);
		return View::make('Users.resetPassword',compact('resetDetails'));
	}

	/**
	 * Handle a POST request to reset a user's password.
	 *
	 * @return Response
	 */
	public function postReset()
	{
		//TO DO: Don't take email as input from user. Put it automatically.
        $credentials = Input::only(
			'email','password', 'password_confirmation', 'token'
		);

		$response = Password::reset($credentials, function($user, $password)
		{
			$user->password = Hash::make($password);

			$user->save();
		});
		// dd($credentials);
		switch ($response)
		{
			case Password::INVALID_PASSWORD:
			case Password::INVALID_TOKEN:
			case Password::INVALID_USER:
				return Redirect::back()->with('failure', Lang::get($response));

			case Password::PASSWORD_RESET:
				return Redirect::to('/users/login')->with('success',Lang::get($response));
		}
	}

}
