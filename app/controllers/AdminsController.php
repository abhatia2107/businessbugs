<?php

class AdminsController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 * GET /admins
	 *
	 * @return Response
	 */
	public function index()
	{
		$admins=$this->admin->getAllAdmins();
		$tableName="$_SERVER[REQUEST_URI]";
		$count=$this->getCountForAdmin();
		$adminPanelListing=$this->adminPanelList;
		return View::make('Admins.index',compact('admins','tableName','count','adminPanelListing'));
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /admins/create
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('Admins.create');
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /admins
	 *
	 * @return Response
	 */
	public function store()
	{
		$credentials=Input::all();
		//dd($credentials);
		$validator = Validator::make($credentials, Admin::$rulesInput);
		if($validator->fails())
		{
			return Redirect::back()->withInput()->withErrors($validator)->with('failure',Lang::get('admin.admin_create_failed'));
		}
		$user=$this->user->getUserForEmailAndContactNo($credentials);
		if(!$user)
		{
			return Redirect::back()->withInput()->with('failure',Lang::get('admin.admin_user_not_exist'));
		}
		else
		{
			$userAdmin['admin_user_id']=$user->id;
			$validator = Validator::make($userAdmin, Admin::$rules);
			if($validator->fails())
			{
				return Redirect::back()->withInput()->with('failure',Lang::get('admin.admin_already_failed'));
			}
			else
			{
				$created=Admin::create($userAdmin);
			}	
		}
		//dd($created);
		if($created){
			/*Confirmation mail is to be send to the newly registerd admin*/
			$email=$user->email;
			$name=$user->user_first_name.' '.$user->user_last_name;
			$data=[
				'name'=>$name,
			];
			$subject=Lang::get('admin.admin_mail_subject');
			Mail::later(60,'Emails.admin', $data, function($message) use ($email,$name,$subject)
			{
    			$message->to($email,$name)->subject($subject);
			});
			return Redirect::to('/admins')->with('success',Lang::get('admin.admin_created'));
		}
		else
			return Redirect::back()->withInput()->with('failure',Lang::get('admin.admin_create_failed'));	
	}

	/**
	 * Display the specified resource.
	 * GET /admins/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$adminDetails=Admin::find($id);
		return Redirect::to('/users/'.$adminDetails['admin_user_id']);
	}

	public function enable($id)
	{
		$admin=Admin::withTrashed()->find($id);
		if($admin){
			$adminDisabled=Admin::onlyTrashed()->find($id);
			if($adminDisabled){
				$adminDisabled->restore();	
				return Redirect::to('/admins')->with('success',Lang::get('admin.admin_enabled'));
			}
			else{
					return Redirect::to('/admins')->with('failure',Lang::get('admin.admin_enable_failed'));
			}
		}
		else
			return Redirect::to('/admins')->with('failure',Lang::get('admin.admin_user_not_exist'));
	}

	public function disable($id)
	{
		$admin=Admin::find($id);	
		//dd($admin);
		if($admin){
			$admin->delete();
			return Redirect::to('/admins')->with('success',Lang::get('admin.admin_disabled'));
		}
		else{
			return Redirect::to('/admins')->with('failure',Lang::get('admin.admin_disable_failed'));
		}
	}


	/**
	 * Remove the specified resource from storage.
	 * DELETE /admins/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$admin=Admin::withTrashed()->find($id);
		if($admin){
			$admin->forceDelete();
			return Redirect::to('/admins')->with('success',Lang::get('admin.admin_deleted'));
		}
		else{
			return Redirect::to('/admins')->with('failure',Lang::get('admin.admin_delete_failed'));
		}
	}

}