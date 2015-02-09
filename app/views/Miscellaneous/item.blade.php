@extends('Layouts.layout')
@section('content')
<div class="jumbotron invoice">
	<div class="row">
		<div class="col-lg-3 col-md-3 col-sm-0"></div>
			<div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 text-center">
				<div class="thumbnail">
					<img src="/assets/images/IMG_2179.JPG">	
					<div class="caption">
						<h2>Item Name</h2>
					</div>
				</div>
			</div>
			<div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 text-center">
				<h3>Total Price: $50</h3>
				<a class="btn btn-primary" role="button" href="#">Pay</a>
			</div>
			<div class="col-lg-3 col-md-3 col-sm-0"></div>
		</div>
</div>
@stop