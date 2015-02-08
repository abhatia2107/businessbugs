<?php

use Illuminate\Database\Eloquent\SoftDeletingTrait;

class Admin extends \Eloquent {

	use SoftDeletingTrait;

	protected $guarded = [
		'id',
		'email',
		'deleted_at',
		'created_at',
		'updated_at',
	];
	
	public static $rulesInput = [
		'email'=>'required|email',
		'user_contact_no'=>'required|regex:/[0-9]{10}/',
	];

	public static $rules = [
		'admin_user_id'=>'unique:admins,admin_user_id',
	];

	public function getAllAdmins()
	{
		return DB::table('admins')
		->Join('users', 'admins.admin_user_id', '=', 'users.id')
		->select('*','admins.id as id','admins.deleted_at as deleted_at','admins.created_at as created_at','admins.updated_at as updated_at')
		->get();
	}

	public function checkIfAdmin($id)
	{
		$admin=Admin::where('admin_user_id', '=', $id);
		if($admin){
			return true;
		}
		else
			return false;
	}
}