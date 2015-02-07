<?php

class BaseController extends Controller {

	protected $admin;
	protected $customer;
	protected $featured;
	protected $feedback;
	protected $magazine;
	protected $subscription;
	protected $user;

	protected $adminPanelList=array(
									'customers' => 'Customers', 
									'features' => 'Features', 
									'feedbacks' => 'Feedbacks', 
									'magazines' => 'Magazines', 
									'subscriptions' => 'Subscriptions',
									'users' => 'Users', 
								);

	/**
	 *Constructor to initialize the instance of all Models.
	 */

	public function __construct()
	{
		$this->admin = new Admin;
		$this->customer = new Customer;
		$this->feature = new Feature;
		$this->feedback = new Feedback;
		$this->magazine = new Magazine;
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
