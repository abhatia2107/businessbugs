@extends('Layouts.layout')
@section('content')
<style type="text/css">
	.body1{
	/*padding-left: 125px;*/
	text-align: center;
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
	overflow:scroll;

	}
	.heading{
		font-family:oswald;
		font-size: 4em;
	}
@media(max-width:600px){
	.heading{
		font-family:Oswald;
		font-size:1.438em;
	}
}
	.sub-heading{
		font-family:oswald; 
		font-size: 2.3em;
	}
	@media(max-width:600px){
		.social{
			margin-top:-270px;
		}
	}
	i{
		color:blue;
	}
</style>
<div class="main-container col-md-12 col-sm-12 col-xs-12">
<div class="main wrapper clearfix">
<main class="clearfix">
<h1 style="padding-top:10px;">
<div class="col-md-1 col-sm-1"></div>
<div class="col-md-8 col-sm-8 col-xs-9">
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
</div>

<div class="col-md-2 col-sm-2"></div>
<div class="icons col-md-1 col-sm-1 col-xs-3">
<ul class="social">
    
            
            	<br/>
            	<br/>
            	<br/>
            	<br/>
            	<br/>
            	<br/>
           
	        <li class="social">
              <a href="https://www.facebook.com/businessbugs">
                <i class="fa fa-facebook">
                </i>
              </a>
            </li>
            <li class="social">
              <a href="https://twitter.com/Business_Bugs">
                <i class="fa fa-twitter">
                </i>
              </a>
            </li>
            
            <li class="social">
              <a href="https://www.youtube.com/channel/UCWNvWJLEZ6eHBOZTRiZ1aoQ">
                <i class="fa fa-youtube">              
                </i>
              </a>
            </li>
          		<br/>
            	<br/>
            	<br/>
            	<br/>
            	<br/>  
            	<br/>        
            </ul>
</div>
</h1>
<h1 class="heading">INDIA'S FIRST ENTREPRENEURSHIP PLATFORM IS HERE</h1>
<p>
<div class="col-lg-4">
<div class="panel">
<div class="panel-body">
<div class="thumbnail">
<img src="/assets/images/learn.jpg" alt="Learn" width="150 px">
</div>
<div class="text-center sub-heading"  style="color:black">
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
<div class="text-center sub-heading"  style="color:black">
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
<div class="text-center sub-heading" style="color:black">
ENJOY
</div>
</div>
</div>
</div>
</p>

<p class="mid-text">
	Business Bugs covers the gap between 'our skills' &#38; 'making our skills profitable'. We endeavor to define entrepreneurship as a new approach of life. Be it advertising on a platform & network as ours or getting knowledge about various business domains or making writing a profitable & viable profession; we will promote entrepreneurship in a way like nobody does.
</p>
</main>
<section class="related">
			<div class="center_title col-md-12 col-sm-12 col-xs-12">
<h3 style="color:black">OUR FIRST PRODUCT</h3>
<!-- <div class="title_icon_1"></div> -->
				<div class="head_content sub-heading" style="text-align:left; float:left">
				<h4 style="color:#5b3839">
					<strong>
						Simple yet Profound Entrepreneur E magazine - Business Bugs
					</strong>
				</h4>
				</div>
			<div class="body1 col-md-12 col-sm-12 col-xs-12">
{{--@foreach($magazine as $data)--}}
<a href="{{url('/payments/create/1')}}" class="pj-blog pj-content-pune ">
					<div class="container1">
						<img src="/assets/images/cover.jpg" height="100%" width="100%">
						<div class="text-center">
							<h3>
								February Issue
							</h3>
						</div>
						<h5 style="color:black">
							Price: ₹ 40
						</h5>
						<div class="text-right">
							<button type="button" class="btn btn-success">
								Buy
							</button>
						</div>
					</div>

				</a>
<a href="{{url('/payments/create/2')}}" class="pj-blog pj-content-pune ">
					<div class="container1">
						<img src="/assets/images/cover.jpg" height="100%" width="100%">
						<div class="text-center">
							<h3>
								Annual Subscription
							</h3>
						</div>
						<h5>
							Price: <strike style="color:red"> ₹ 480 </strike> 38% OFF ₹ 300
						</h5>
						<div class="text-right">
							<button type="button" class="btn btn-success">
								Buy
							</button>
						</div>
					</div>

				</a>
				{{--@endforeach--}}
</div>
</div>
</section>
</div>
</div>
@endsection

   

