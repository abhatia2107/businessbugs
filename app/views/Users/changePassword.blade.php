@extends('Layouts.layout')
@section('content')
<div class="container">
    <form role="form" method="post" enctype="multipart/form-data" action="/users/changepassword/submit">
    	<div class="col-xs-12 col-md-3 col-sm-3"></div>
		<div class="col-xs-12 col-sm-6 col-md-6">
		<div class="form-group required">
		<label for="InputPasswordnew"> Current Password<sup>*</sup> </label>
		<input type="hidden" name="csrf_token" value="{{ csrf_token() }}">
		<input type="password"  name="current_password" class="form-control" id="InputPasswordnew" required>
		</div>
		<div class="form-group ">
		<label for="InputPasswordnew"> New Password<sup>*</sup> </label>
		<input type="password"  name="password" class="form-control" id="InputPasswordnew" required>
		</div>
		<div class="form-group required">
		<label for="InputPasswordnewConfirm"> Confirm Password<sup>*</sup></label>
		<input type="password"  name="password_confirmation" class="form-control" id="InputPasswordnewConfirm" required>
		</div>
		<div class="form-group venues-list-buttons">
		<button type="submit" class="btn btn-primary">Change Password</button>
		</div>
		</div>
		<div class="col-xs-12 col-md-3 col-sm-3"></div>
	</form>
</div>	
@stop