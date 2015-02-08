@extends('Layouts.layout')
@section('content')

	<div class="row forgot_password">
		<div class="col-lg-12 col-md-8 col-sm-12">
			<h1 class="section-title-inner"> 
				<span> 
					<i class="fa fa-unlock-alt"> </i> 
					Forgot your password? 
				</span> 
			</h1>
			<div class="row userInfo">
				<div class="col-xs-12 col-sm-12 col-md-5">
					<p> To reset your password, enter the email address which you use to login. We will then send you a link to change the password </p>
					<form role="form" method="POST" action="/users/password/remind/submit">
						<div class="form-group">
							<input type="hidden" name="csrf_token" value="{{ csrf_token() }}">
							<label for="email" > Email address </label>
							<input  type="email" class="form-control" id="email" placeholder="Enter email" name="email">
						</div>
						<button type="submit" class="btn   btn-primary"> <i class="fa fa-unlock"> </i> Retrieve Password </button>
					</form>
					<div class="clear clearfix">
						<ul class="pager">
							<li class="previous pull-right"> <a href="/users/login"> &larr; Back to Login </a> </li>
						</ul>
					</div>
				</div>
			</div>
			<!--/row userInfo end--> 

		</div>
		<div class="col-lg-3 col-md-3 col-sm-5"> </div>
	</div>
	<!--/row-->
@stop