@extends('Layouts.layout')
@section('content')
<style type="text/css">
	.body1{
	padding-left: 125px;
	padding-top: 20px;

	}
	.container1 {
	padding:10px;
	height:auto;
	max-width: 375px;
	border:1px solid #cccccc;
	margin-right: auto;
	margin-left: auto;
	background:#E6E6E6;
	display: inline-block;
	overflow:hidden;
	
	}
	
	.clear {
	clear: both;
	overflow: scroll;

	}
</style>
<div class="main-container">
<div class="main wrapper clearfix">
<main class="clearfix">
<h1 style="padding-top:10px;">
<div id="myCarousel" class="carousel slide" data-ride="carousel">
<div class="carousel-inner" role="listbox">
<div class="item active">
<img alt="First slide" src="/assets/images/Home Slider/bawa.jpg">
<section class="img-text">
<p>
Meet Khurshed Batliwala THE ENTREPRENEURIAL INSPIRATION<br>
Read what BAWA has to say on 'Entrepreneurship &#38; Meditation'
</p>
</section>
</div>
<div class="item">
<img alt="Second slide" src="/assets/images/Home Slider/modi.jpg">
<section class="img-text">
<p>
MODINOMICS – How Modi is going to revive Indian economy
Financial Genius Ankit Gupta on what Modi has done &#38; should do in FY 2015. The most simple yet profound analysis.
</p>
</section>
</div>
<div class="item">
<img alt="Third slide" src="/assets/images/Home Slider/entrepreneur.png">
<section class="img-text">
<p>
ENTREPRENEURSHIP – WHY, WHEN, WHERE – The never asked question
We get in to the simplest details of entrepreneurship in Indian scenario.
</p>
</section>
</div>
</div>
<a class="left carousel-control" data-slide="prev" role="button" href="#myCarousel">
<span class="glyphicon glyphicon-chevron-left" aria-hidden="true">
</span>
<span class="sr-only">
Previous
</span>
</a>
<a class="right carousel-control" data-slide="next" role="button" href="#myCarousel">
<span class="glyphicon glyphicon-chevron-right" aria-hidden="true">
</span>
<span class="sr-only">
Next
</span>
</a>
</div>
INDIA'S FIRST ENTREPRENEURSHIP PLATFORM IS HERE</h1>
<p>
<div class="col-lg-4">
<div class="panel">
<div class="panel-body">
<div class="thumbnail">
<img src="/assets/images/learn.jpg" alt="Learn" width="150 px">
</div>
<div class="text-center">
LEARN
</div>
</div>
</div>
</div>
<div class="col-lg-4">
<div class="panel">
<div class="panel-body">
<div class="thumbnail">
<img src="/assets/images/earn.jpg" alt="Earn" width="113 px">
</div>
<div class="text-center">
EARN
</div>
</div>
</div>
</div>
<div class="col-lg-4">
<div class="panel">
<div class="panel-body">
<div class="thumbnail">
<img src="/assets/images/enjoy.jpg" alt="Enjoy" width="160 px">
</div>
<div class="text-center">
ENJOY
</div>
</div>
</div>
</div>
</p>
<p class="mid-text">
<strong>BUSINESS BUGS</strong> covers the gap between 'our skills' &#38; 'making our skills profitable'. We endeavor to define entrepreneurship as a new approach of life. Be it advertising on a platform & network as ours or getting knowledge about various business domains or making writing a profitable & viable profession; we will promote entrepreneurship in a way like nobody does.
</p>
</main>
<section class="related">
			<div class="center_title col-md-12 col-sm-12 col-xs-12">
				<h3>OUR FIRST PRODUCT</h3>
					<!-- <div class="title_icon_1"></div> -->
				<div class="head_content" style="text-align:left; float:left">
				<h4>
					<strong>
						Simple yet Profound Entrepreneur E magazine - Business Bugs
					</strong>
				</h4>
				</div>
			</div>
			<div class="body1 col-md-12 col-sm-12 col-xs-12">
				@foreach($magazine as $data)
				<a href="{{url('/payments/create/1')}}" class="pj-blog pj-content-pune ">
					<div class="container1">
						<img src="/assets/images/cover.jpg" height="450" width="350">
						<div class="text-center">
							<h3>
								{{$data->magazine}}
							</h3>
						</div>
						<h5>
							Price: ₹ {{$data->magazine_price}}
						</h5>
						<div class="text-right">
							<button type="button" class="btn btn-success">
								Buy
							</button>
						</div>
					</div>

				</a>
				@endforeach<br>
			</div>
		</section>
</div>
	</div>
@endsection

   

