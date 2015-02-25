<?php

class PaymentsController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 * GET /payments
	 *
	 * @return Response
	 */
	public function index()
	{
		//
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /payments/create
	 *
	 * @return Response
	 */
	public function create()
	{

		return View::make('Payments.create');
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /payments
	 *
	 * @return Response
	 */
	public function store($id)
	{
		$user_id=Auth::id();
		$user=User::find($user_id);
		// dd($user);
		$posted['amount']=50;
		$posted['firstname']=$user->user_first_name;
		$posted['email']=$user->email;
		if(!($user->user_contact_no))
			$posted['phone']='1';
		else
			$posted['phone']=$user->user_contact_no;
		$posted['productinfo']="ok";
		$posted['surl']=url("success");
		$posted['furl']=url("failure");
		$posted['service_provider']="payu_paisa";
		// Merchant key here as provided by Payu
	    $MERCHANT_KEY = "JBZaLc";
	    $posted['key']=$MERCHANT_KEY;
	    // Merchant Salt as provided by Payu
	    $SALT = "GQs7yium";

	    // End point - change to https://secure.payu.in for LIVE mode
	    $PAYU_BASE_URL = "https://test.payu.in";
		// $action = '/payments/store';
	    $formError = 0;
	    // dd("test");
	    // $posted = array();
	    if(empty($posted['txnid'])) {
	      // Generate random transaction id
	      // dd(7);
	      $txnid = substr(hash('sha256', mt_rand() . microtime()), 0, 20);
	      $posted['txnid']=$txnid;
	    } else {
	    	// dd(8);
	      $txnid = $posted['txnid'];
	    }
	    // dd($txnid);
	    $hash = '';
	    // $posted=Input::all();
		// dd($credentials);
		// Hash Sequence
		$hashSequence = "key|txnid|amount|productinfo|firstname|email";
		// dd($hashSequence);
		if(empty($posted['hash']) && sizeof($posted) > 0) {
		  if(
		          empty($posted['key'])
		          || empty($posted['txnid'])
		          || empty($posted['amount'])
		          || empty($posted['firstname'])
		          || empty($posted['email'])
		          || empty($posted['phone'])
		          || empty($posted['productinfo'])
		          || empty($posted['surl'])
		          || empty($posted['furl'])
				  || empty($posted['service_provider'])
		  ) {
		    $formError = 1;
		  } else {
		    //$posted['productinfo'] = json_encode(json_decode('[{"name":"tutionfee","description":"","value":"500","isRequired":"false"},{"name":"developmentfee","description":"monthly tution fee","value":"1500","isRequired":"false"}]'));
			$hashVarsSeq = explode('|', $hashSequence);
		    $hash_string = '';
			foreach($hashVarsSeq as $hash_var) {
		      $hash_string .= isset($posted[$hash_var]) ? $posted[$hash_var] : '';
		      $hash_string .= '|';
		    }

		    $hash_string .= '||||||||||'.$SALT;
		    $posted['hash_string']=$hash_string;
		    // dd($hash_string);
		    $hash = strtolower(hash('sha512', $hash_string));
		    $posted['hash']=$hash;
		    // dd($hash);
		    $action = $PAYU_BASE_URL . '/_payment';
		  }
		} elseif(!empty($posted['hash'])) {
		  $hash = $posted['hash'];
		  $action = $PAYU_BASE_URL . '/_payment';
		}
		$url=$action;
		$posted['action']=$url;
		$posted['posted']=$posted;
		// dd($posted);
		return View::make('Payments.create',$posted);
	}

	/**
	 * Display the specified resource.
	 * GET /payments/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 * GET /payments/{id}/edit
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 * PUT /payments/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 * DELETE /payments/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}