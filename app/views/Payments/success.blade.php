@extends('Layouts.layout')
@section('content')
	<h3>Thank You. Your order status is ". $status .".</h3>
	<h4>Your Transaction ID for this transaction is ".$txnid.".</h4>
	<h4>We have received a payment of Rs. " . $amount . ". Your order will soon be shipped.</h4>
@stop
