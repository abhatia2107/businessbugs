@extends('Layouts.layout')
@section('content')
    <form method="post" enctype="multipart/form-data" action="/users/update">
		<div class="col-xs-12 col-sm-6">
		<div class="form-group required">
		<label for="InputPasswordnew"> Current Password<sup>*</sup> </label>
		<input type="hidden" name="token" value="{{ csrf_token() }}">
		<input type="password"  name="current_password" class="form-control" id="InputPasswordnew">
		</div>
		<div class="form-group required">
		<label for="InputPasswordnew"> New Password<sup>*</sup> </label>
		<input type="password"  name="password" class="form-control" id="InputPasswordnew">
		</div>
		<div class="form-group required">
		<label for="InputPasswordnewConfirm"> Confirm Password<sup>*</sup></label>
		<input type="password"  name="password_confirmation" class="form-control" id="InputPasswordnewConfirm">
		</div>
		</div>
		<div class="col-lg-12">
		<button type="submit" class="btn btn-primary"><i class="fa fa-save"></i> &nbsp; Change Password </button>
		</div>
	</form>
@stop