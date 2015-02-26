@extends('Layouts.layout')
@section('content')
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
Meet Khurshed Batliwala  THE ENTREPRENEURIAL INSPIRATION<br>
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
INDIA'S FIRST ENTREPRENEURSHIP PLATFORM  IS HERE</h1>
                    <p>
                    	<div class="col-lg-4">
                    	<div class="panel">
                    	<div class="panel-body">
                    	<div class="thumbnail">
                    	<img src="/assets/images/IMG_2176.JPG">
                    	</div>
                    	<div class="panel-footer text-center">
                    	LEARN
                    	</div>
                    	</div>
                    	</div>
                    	</div>
                    	<div class="col-lg-4">
                    	<div class="panel">
                    	<div class="panel-body">
                    	<div class="thumbnail">
                    	<img src="/assets/images/IMG_2176.JPG">
                    	</div>
                    	<div class="panel-footer text-center">
                    	EARN
                    	</div>
                    	</div>
                    	</div>
                    	</div>
                    	<div class="col-lg-4">
                    	<div class="panel">
                    	<div class="panel-body">
                    	<div class="thumbnail">
                    	<img src="/assets/images/IMG_2176.JPG">
                    	</div>
                    	<div class="panel-footer text-center">
                    	ENJOY
                    	</div>
                    	</div>
                    	</div>
                    	</div>
                    </p>
<p class="mid-text"><strong>BUSINESS BUGS</strong> covers the gap between 'our skills' & 'making our skills profitable'. We endeavor to define entrepreneurship as a new approach of life. Be it advertising on a platform & network as ours or getting knowledge about various business domains or making writing a profitable & viable profession; we will promote entrepreneurship in a way like nobody does.
</p>

 
                </main>
                
                 

    <section class="related">
    <div class="center_title">
    <h3>OUR FIRST PRODUCT</h3>
    <div class="title_icon_1"></div>
    <span class="head_content" style="text-align:left; float:left">Simple yet Profound Entrepreneur E magazine - Business Bugs</span>
    </div>

    <a href="{{url('/payments/create/1')}}" class="pj-blog pj-content-pune ">
        <img width="257" height="300" src="{{asset('/assets/images/cover.jpg')}}" class="attachment-medium wp-post-image" alt="unbeliveablish">
        <section class="img-text">
            ₹30
        </section>
        <div class="style_buy">Buy</div>
    </a>
        
    <a href="{{url('/payments/create/1')}}" class="pj-blog pj-content-pune ">
        <img width="257" height="300" src="{{asset('/assets/images/cover.jpg')}}" class="attachment-medium wp-post-image" alt="unbeliveablish">
        <section class="img-text">
            ₹3000
        </section>
        <div class="style_buy">Buy</div>
    </a>
    </section>
    </div>
    </div>
@endsection