@extends('Layouts.layout')
@section('content')

<h3>Your order status is {{ $status}} </h3>
<h4>Your transaction id for this transaction is {{$txnid}}. You may try making the payment by clicking the link below.</h4>
<!--Please enter your website homepage URL -->
<p><a href={{url('/payments/create/')}}/{{$udf1}}> Try Again</a></p>
@stop
