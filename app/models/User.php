<?php

use Illuminate\Auth\UserTrait;
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableTrait;
use Illuminate\Auth\Reminders\RemindableInterface;
use Illuminate\Database\Eloquent\SoftDeletingTrait;

class User extends Eloquent implements UserInterface, RemindableInterface {

	use UserTrait, RemindableTrait, SoftDeletingTrait;

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */
	protected $hidden = array('password', 'remember_token');

	protected $guarded = [
		'id',
		'password_confirmation',
		'user_confirmed',
		'csrf_token',
		'signup_terms',
		'remember',
		'deleted_at',
		'created_at',
		'updated_at',
	];

	public static $rules = [
		'user_first_name'=>'required',
	   	'email'=>'required|unique:users',
		'user_contact_no'=>'required|unique:users|regex:/[0-9]{10}/',
		'password'=>'required|confirmed|min:8|regex: /^[a-zA-Z0-9!@#$%&_]+$/',
	    'user_birthdate'=>'date',
	    'user_gender'=>'boolean',
	    'user_confirmed'=>'boolean',                   
	];
	
	public static $fbRules=[
		'email'=>'unique:users,email',
	];

	public static $rulesChangePassword=[
		'current_password'=>'required',
		'password'=>'required|confirmed|min:8|regex: /^[a-zA-Z0-9!@#$%&_]+$/',
	];
	
	public function updateUser($credentials,$id)
    {
        $updated=DB::table('users')->where('id','=',$id)->update($credentials);
        return ($updated);
    } 

    public function getUserForEmailAndContactNo($credentials)
    {
    	// dd($credentials);
    	$user=DB::table('users')
    		// ->select('*')
    		->where('email','=',$credentials['email'])
    		->where('user_contact_no','=',$credentials['user_contact_no'])
    		->get();
    	if($user)
    		return $user[0];
    	else
	    	return false;
    }

	public static $uniqueEmail=[
		'email'=>'unique:users,email',
	];
	public function getUid($uid)
	{
		// var_dump($uid);
		$user= User::where('user_fb_id','=',$uid)->get(array('id'))->toArray();
		// dd($user);
		if($user)
			return $user[0]['id'];
		else
			return null;
	}
	/**
	*Function To Get 'user_id' From Users Table 
	*@param emailid of the user
	*@return array of userid
	*/
	public function  getid($email)
	{
		return DB::select('select id from users where email=?',array($email));
	}
	/**
	*To change the password of the user.
	*@param user_id of the logged in user
	*
	*/
	public function change_password($id)
	{
		
	}
	public function getAuthPassword()
	{
		return $this->password;
	}

	public function getUserOneDay($date)
	{
		return User::where('created_at','>',$date)->count();
	}

	public function getUserActive()
    {
        return User::count();
    }

    public function getUserDisabled()
    {
        return User::onlyTrashed()->count();
    }
}
