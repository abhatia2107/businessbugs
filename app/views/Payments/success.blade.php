@extends('Layouts.layout')
@section('content')
<div class="main-container payments wrapper">
	<div class="panel panel-success">
		<div class="panel-heading text-center">Thank You! Your order status is {{$status}}.</div>
		<div class="panel-body">
		<div class="lead text-center">
	
	<h4>Your Transaction ID for this transaction is <strong>{{$txnid}}</strong>.</h4>
	<h4>We have received a payment of <strong>Rs {{$amount}}</strong> for your order.</h4>
	<h4>Your copy of <strong>{{$productinfo}}</strong> have been mailed to you.</h4>
	</div>
	</div>
	</div>
	</div>
@stop
