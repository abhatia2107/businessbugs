@extends('Layouts.layout')
@section('content')
    <form action="{{$posted['action']}}" method="post" role="form" enctype="multipart/form-data" name="payuForm">
    <input type="hidden" name="key" value="{{$posted['key']}}">
    <input type="hidden" name="hash" value="{{$posted['hash']}}">
    <input type="hidden" name="txnid" value="{{$posted['txnid']}}">
    <input type="hidden" name="udf1" value="{{$posted['udf1']}}">
    <input type="hidden" name="amount" value="{{$posted['amount']}}">
    <input type="hidden" name="surl" value="{{$posted['surl']}}">
    <input type="hidden" name="furl" value="{{$posted['furl']}}">
    <input type="hidden" name="curl" value="{{$posted['curl']}}">
    <input type="hidden" name="service_provider" value="{{$posted['service_provider']}}">
    <input type="hidden" name="productinfo" value="{{$posted['productinfo']}}">

    <td>First Name: </td>
    <input name="firstname" value="{{$posted['firstname']}}">
    <td>Last Name: </td>
    <input name="lastname" value="{{$posted['lastname']}}">
    <td>Email: </td>
    <input name="email" value="{{$posted['email']}}">
    <td>Phone: </td>
    <input name="phone" value="{{$posted['phone']}}">
    <input type="submit" value="Submit" />
@stop
