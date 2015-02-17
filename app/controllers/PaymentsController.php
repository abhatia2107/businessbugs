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
	public function store()
	{
		// Merchant key here as provided by Payu
	    $MERCHANT_KEY = "JBZaLc";

	    // Merchant Salt as provided by Payu
	    $SALT = "GQs7yium";

	    // End point - change to https://secure.payu.in for LIVE mode
	    $PAYU_BASE_URL = "https://test.payu.in";
		$action = '/payments/store';
	    $formError = 0;

	    $posted = array();
	    if(empty($posted['txnid'])) {
	      // Generate random transaction id
	      $txnid = substr(hash('sha256', mt_rand() . microtime()), 0, 20);
	    } else {
	      $txnid = $posted['txnid'];
	    }
	    $hash = '';
	    $posted=Input::all();
		// dd($credentials);
		// Hash Sequence
		$hashSequence = "key|txnid|amount|productinfo|firstname|email|udf1|udf2|udf3|udf4|udf5|udf6|udf7|udf8|udf9|udf10";
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
		      $hash_string = isset($posted[$hash_var]) ? $posted[$hash_var] : '';
		      $hash_string = '|';
		    }

		    $hash_string = $SALT;


		    $hash = strtolower(hash('sha512', $hash_string));
		    $action = $PAYU_BASE_URL . '/_payment';
		  }
		} elseif(!empty($posted['hash'])) {
		  $hash = $posted['hash'];
		  $action = $PAYU_BASE_URL . '/_payment';
		}
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