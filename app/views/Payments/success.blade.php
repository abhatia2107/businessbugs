@extends('Layouts.layout')
@section('content')
	<h3>Thank You. Your order status is {{$status}}.</h3>
	<h4>Your Transaction ID for this transaction is {{$txnid}}.</h4>
	<h4>We have received a payment of ₹ {{$amount}} for your order.</h4>
	<h4>Your copy of {{$productinfo}} have been mailed to you.</h4>
@stop
