@extends('Layouts.layout')
@section('content')
<div class="main-container payments wrapper">
	<div class="panel panel-danger">
		<div class="panel-heading text-center">Your order status is {{$status}}.</div>
		<div class="panel-body">
		<div class="lead text-center">
<h4>Your transaction id for this transaction is {{$txnid}}. </h4>
<h5>You may try making the payment by clicking the link below.</h5>
<!--Please enter your website homepage URL -->
<p><a href={{url('/payments/create/')}}/{{$udf1}}> Try Again</a></p>
</div>
</div>
</div>
</div>
@stop
