<?php

class BaseController extends Controller {

	protected $admin;
	protected $featured;
	protected $feedback;
	protected $subscription;
	protected $user;

	protected $adminPanelList=array(
									'features' => 'Features', 
									'feedbacks' => 'Feedbacks', 
									'subscriptions' => 'Subscriptions',
									'users' => 'Users', 
								);

	/**
	 *Constructor to initialize the instance of all Models.
	 */

	public function __construct()
	{
		$this->admin = new Admin;
		$this->feature = new Feature;
		$this->feedback = new Feedback;
		$this->subscription = new Subscription;
		$this->user = new User;
	}
	
	/**
	 * Setup the layout used by the controller.
	 *
	 * @return void
	 */
	protected function setupLayout()
	{
		if ( ! is_null($this->layout))
		{
			$this->layout = View::make($this->layout);
		}
	}

	public function getCountForAdmin()
	{
		return $countForAdmin=array(
			'users' => User::count(),
		); 
	}
}
