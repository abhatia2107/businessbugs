@extends('Layouts.layout')
@section('content')
<style type="text/css">
label {
    width:180px;
    clear:left;
    text-align:right;
    padding-right:10px;
}
</style>
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
    <div class="row">
                        <div class="form-group required">
                            <label for="first_name" class="col-sm-3 control-label ">First Name<sup>*</sup>
                            </label>
                            <div class="col-sm-4">
                                <input type="text"   class="form-control " name="firstname"  id="firstname" value="{{$posted['firstname']}}">
                            </div>
                        </div>
                    </div><br>
                    <div class="row">
                        <div class="form-group">
                            <label for="last_name"  class="col-sm-3 control-label ">Last Name</label>
                            <div class="col-sm-4">
                                <input type="text"  class="form-control " name="lastname"  id="lastname" value="{{$posted['lastname']}}">
                            </div>
                        </div>
                    </div><br>
                    <div class="row">
                        <div class="form-group required">
                            <label for="email" class="col-sm-3 control-label ">Email<sup>*</sup>
                            </label>
                            <div class="col-sm-4">
                                <input type="email"  placeholder="mymail@example.com" class="form-control " name="email"  id="email" value="{{$posted['email']}}">
                            </div>
                        </div>
                    </div><br>
                    <div class="row">
                        <div class="form-group required">
                            <label for="contact_no" class="col-sm-3 control-label ">Mobile Number<sup>*</sup></label>
                            <div class="col-sm-4">
                                <input type="tel" class="form-control " name="phone"  id="contact_no" value="{{$posted['phone']}}">
                            </div>
                        </div>
                    </div><br>
                    <div class="row">
                        <div class="form-group required">
                            <div class="col-sm-4">
                            </div>
                            <div class="col-sm-4">
                    <button type="Submit"class="btn-success" >Looks Good</button>
                    </div>
                    </div>
                    </div>
    </form>
@stop
