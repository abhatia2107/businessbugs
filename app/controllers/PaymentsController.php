<?php

class PaymentsController extends \BaseController {

	public function create($id)
	{
	    $MERCHANT_KEY = "JBZaLc";
	    $SALT = "GQs7yium";
	    $PAYU_BASE_URL = "https://test.payu.in";
	    $service_provider="payu_paisa";
		$user_id=Auth::id();
		$user=User::find($user_id);
		$magazine=Magazine::find($id);
	    $txnid = substr(hash('sha256', mt_rand() . microtime()), 0, 20);
	    $hashSequence = "key|txnid|amount|productinfo|firstname|email";
		$posted['service_provider']=$service_provider;
		$posted['key']=$MERCHANT_KEY;
		$posted['txnid']=$txnid;
		$posted['amount']=$magazine->magazine_price;
		$posted['productinfo']=$magazine->magazine;
		$posted['firstname']=$user->user_first_name;
		$posted['lastname']=$user->user_last_name;
		$posted['email']=$user->email;
		$posted['phone']=$user->user_contact_no;
		$posted['surl']=url("payments/success");
		$posted['furl']=url("payments/failure");
		$posted['curl']=url("payments/cancel");
		$hashVarsSeq = explode('|', $hashSequence);
	    $hash_string = '';
		foreach($hashVarsSeq as $hash_var) {
	      $hash_string .= isset($posted[$hash_var]) ? $posted[$hash_var] : '';
	      $hash_string .= '|';
	    }
	    $hash_string .= '||||||||||'.$SALT;
		$posted['hash_string']=$hash_string;
		$hash = strtolower(hash('sha512', $hash_string));
		$posted['hash']=$hash;
	    $posted['action'] = $PAYU_BASE_URL . '/_payment';
	    // dd($posted['hash_string']);
		return View::make('Payments.create',compact('posted'));
	}

	public function success()
	{
	    $SALT = "GQs7yium";
		$credentials=Input::all();
		// dd($credentials);
		$hashSequence = "email|firstname|productinfo|amount|txnid|key";
		$hashVarsSeq = explode('|', $hashSequence);
	    // $hash_string = ''
	    $hash_string = $SALT.'|';
	    $hash_string .= $credentials['status'].'||||||||||';
	    foreach($hashVarsSeq as $hash_var) {
	      $hash_string .= '|';
	      $hash_string .= isset($credentials[$hash_var]) ? $credentials[$hash_var] : '';
	    }
	    $hash = strtolower(hash('sha512', $hash_string));
	    // dd($hash_string);
		if($hash==$credentials['hash'])
			return View::make('Payments.success');
		else
			return 'CheckSum Error. Invalid Transaction. Please try again';
	}

	public function failure()
	{
	    $SALT = "GQs7yium";
		$credentials=Input::all();
		// dd($credentials);
		$hashSequence = "email|firstname|productinfo|amount|txnid|key";
		$hashVarsSeq = explode('|', $hashSequence);
	    // $hash_string = ''
	    $hash_string = $SALT.'|';
	    $hash_string .= $credentials['status'].'||||||||||';
	    foreach($hashVarsSeq as $hash_var) {
	      $hash_string .= '|';
	      $hash_string .= isset($credentials[$hash_var]) ? $credentials[$hash_var] : '';
	    }
	    $hash = strtolower(hash('sha512', $hash_string));
	    // dd($hash_string);
		if($hash==$credentials['hash'])
			return View::make('Payments.failure');
		else
			return 'CheckSum Error. Invalid Transaction. Please try again';
	}

}