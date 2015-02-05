<?php

/*
|--------------------------------------------------------------------------
| Application & Route Filters
|--------------------------------------------------------------------------
|
| Below you will find the "before" and "after" events for the application
| which may be used to do any work before or after a request into your
| application. Here you may also register your custom route filters.
|
*/



App::before(function($request)
{
	//
});


App::after(function($request, $response)
{
	//
});

/*
|--------------------------------------------------------------------------
| Authentication Filters
|--------------------------------------------------------------------------
|
| The following filters are used to verify that the user of the current
| session is logged into this application. The "basic" filter easily
| integrates HTTP Basic authentication for quick, simple checking.
|
*/

Route::filter('auth', function()
{
	if (!(Auth::id()))
	{
		if (Request::ajax())
		{
			return Response::make('Unauthorized', 401);
		}
		return Redirect::guest('/users/login')->with('failure',Lang::get('routingFilter.login'));
	}
});


/*
|--------------------------------------------------------------------------
| CSRF Protection Filter
|--------------------------------------------------------------------------
|
| The CSRF filter is responsible for protecting your application against
| cross-site request forgery attacks. If this special token in a user
| session does not match the one given in this request, we'll bail.
|
*/

Route::filter('csrf', function()
{
	if (Session::token() !== Input::get('csrf_token'))
	{
		throw new Illuminate\Session\TokenMismatchException;
	}
});

function approved()
{
	$batch_id=Request::segment(3);
	$approved=Batch::isBatchApproved($batch_id);
	if(!$approved)
	{
		return Redirect::to('/')->with('failure',Lang::get('batch.batch_not_approved'));
	}
}

// To check if a user own the batch, he's trying to edit.
function batchOwn()
{
	$user_id=Auth::id();
	$batch_id=Request::segment(3);
	$batch_user_id=Batch::getUserforBatch($batch_id);
	if(is_null($batch_user_id))
	{
		return Redirect::to('/')->with('failure',Lang::get('batch.batch_disabled_by_admin'));
	}
	if($user_id!=$batch_user_id)
	{
		return Redirect::to('/')->with('failure',Lang::get('routingFilter.permission_denied'));
	}
}

// To check if a user own the comment, he's trying to edit.
function commentOwn()
{
	$user_id=Auth::id();
	$comment_id=Request::segment(3);
	$comment_user_id=Comment::getUserforComment($comment_id);
	if($user_id!=$comment_user_id)
	{
		return Redirect::to('/')->with('failure',Lang::get('routingFilter.permission_denied'));
	}
}


/*
|--------------------------------------------------------------------------
| Guest Filter
|--------------------------------------------------------------------------
|
| The "guest" filter is the counterpart of the authentication filters as
| it simply checks that the current user is not logged in. A redirect
| response will be issued if they are, which you may freely change.
|
*/

function guest()
{
	if (Auth::id()) 
		return Redirect::to('/')->with('success',Lang::get('routingFilter.already_login'));
}

// To check if a user has not added institute.
function institute()
{
	$user_id=Auth::id();
	$institute_id=Institute::getInstituteforUser($user_id);
	if(is_null($institute_id))
	{
		return Redirect::to('/')->with('failure',Lang::get('institute.institute_disabled_by_admin'));
	}
	if(!$institute_id)
	{
		return Redirect::to('/institutes/create');
	}
}

// To check if a user own the institute, he's trying to edit.
function instituteOwn()
{
	$user_id=Auth::id();
	$institute_id=Request::segment(3);
	$institute_user_id=Institute::getUserforInstitute($institute_id);
	if(is_null($institute_user_id))
	{
		return Redirect::to('/')->with('failure',Lang::get('institute.institute_disabled_by_admin'));
	}
	if($user_id!=$institute_user_id)
	{
		return Redirect::to('/')->with('failure',Lang::get('routingFilter.permission_denied'));
	}
}

// To check if a user has added institute.
function instituteNotOwn()
{
	$id=Auth::id();
	$institute_id=Institute::getInstituteforUser($id);
	if(is_null($institute_id))
	{
		return Redirect::to('/')->with('failure',Lang::get('institute.institute_disabled_by_admin'));
	}
	if($institute_id)
	{
		return Redirect::to('/institutes/'.$institute_id);
	}
}

// To check if a user own the venue, he's trying to edit.
function venueOwn()
{
	$user_id=Auth::id();
	$venue_id=Request::segment(3);
	$venue_user_id=Venue::getUserforVenue($venue_id);
	if(is_null($venue_user_id))
	{
		return Redirect::to('/')->with('failure',Lang::get('venue.venue_disabled_by_admin'));
	}
	if($user_id!=$venue_user_id)
	{
		return Redirect::to('/')->with('failure',Lang::get('routingFilter.permission_denied'));
	}
}

// To check if user is an admin or not.
Route::filter('admin',function()
{
	$id=Auth::id();
	$admin=Admin::where('admin_user_id','=',$id)->get()->toarray();
	if(!count($admin))
		return Redirect::to('/')->with('failure',Lang::get('routingFilter.permission_denied'));
});


// To check if user is an admin or not.
function admin()
{
	$id=Auth::id();
	$admin=Admin::where('admin_user_id','=',$id)->get()->toarray();
	if(!count($admin))
		return Redirect::to('/');
}

// To check if user is main admin or not. There will be 2 main admins, with id->1,2. 
Route::filter('mainAdmin',function()
{	
	$id=Auth::id();
	$admin=Admin::where('admin_user_id','=',$id)->get()->toarray();
	if(($admin[0]['id']!=1)&&($admin[0]['id']!=2))
		return Redirect::to('/admin')->with('failure',Lang::get('routingFilter.permission_denied'));
});

Route::filter('approved-or-admin', function () 
{
   	$admin=call_user_func('admin');
   	if(!$admin)
   		return ;
    $value = call_user_func('approved');
    if (($value)&&($admin)) 
    	return $value;
});

Route::filter('batchOwn-or-admin', function () 
{
   	$admin=call_user_func('admin');
   	if(!$admin)
   		return ;
    $value = call_user_func('batchOwn');
    if (($value)&&($admin)) 
    	return $value;
});

Route::filter('guest-or-admin', function () 
{
   	$admin=call_user_func('admin');
   	if(!$admin)
   		return ;
    $value = call_user_func('guest');    
    if (($value)&&($admin)) 
    	return $value;
});

Route::filter('institute-or-admin', function () 
{
   	$admin=call_user_func('admin');
   	if(!$admin)
   		return ;
    $value = call_user_func('institute');    
    if (($value)&&($admin)) 
    	return $value;
});

Route::filter('instituteOwn-or-admin', function () 
{
   	$admin=call_user_func('admin');
   	if(!$admin)
   		return ;
    $value = call_user_func('instituteOwn');    
    if (($value)&&($admin)) 
    	return $value;
});

Route::filter('instituteNotOwn-or-admin', function () 
{
   	$admin=call_user_func('admin');
   	if(!$admin)
   		return ;
    $value = call_user_func('instituteNotOwn');
    if (($value)&&($admin)) 
    	return $value;
});

Route::filter('venueOwn-or-admin', function () 
{
   	$admin=call_user_func('admin');
   	if(!$admin)
   		return ;
	$value = call_user_func('venueOwn');    
    if (($value)&&($admin)) 
    	return $value;
});
