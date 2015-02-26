<?php

class HomeController extends BaseController {

	/*
	|--------------------------------------------------------------------------
	| Default Home Controller
	|--------------------------------------------------------------------------
	|
	| You may wish to use controllers instead of, or in addition to, Closure
	| based routes. That's great! Here is an example controller method to
	| get you started. To route to this controller, just add the route:
	|
	|	Route::get('/', 'HomeController@showWelcome');
	|
	*/

	public function showWelcome()
	{
		$homeLang =Lang::get('ViewsLang/home');
		// dd($homeLang);
		$magazine=Magazine::all();
		return View::make('Miscellaneous.home',compact('homeLang','magazine'));
	}

	public function showDummyWelcome()
	{
		return View::make('Miscellaneous.homeDummy');
	}

	public function showAdminHome()
	{
		$homeAdminLang =Lang::get('homeAdmin');
		$tableName="$_SERVER[REQUEST_URI]";
		$count=$this->getCountForAdmin();
		$adminPanelListing=$this->adminPanelList;
		return View::make('Miscellaneous.Admin.home',compact('homeAdminLang','tableName','count','adminPanelListing'));
	}
	
}
