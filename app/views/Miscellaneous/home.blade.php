@extends('Layouts.layout')
@section('content')
<div id="myCarousel" class="carousel slide" data-ride="carousel">
<div class="carousel-inner" role="listbox">
<div class="item active">
<img alt="First slide" src="/assets/images/Home Slider/bawa.jpg">
<section class="intro">
    <div class="col12">
      <a role="button" class="btn btn-default" id="magazine" href="{{url('/item')}}">Buy It Now<span class="glyphicon glyphicon-chevron-right"></span></a>
    </div>
  </section>
  </img>
</div>
<div class="item">
<img alt="Second slide" src="/assets/images/Home Slider/entrepreneur.png">
<section class="intro">
    <div class="col12">
      <a role="button" class="btn btn-default" id="magazine" href="{{url('/item')}}">Buy It Now<span class="glyphicon glyphicon-chevron-right"></span></a>
    </div>
  </section>
  </img>
</div>
<div class="item">
<img alt="Third slide" src="/assets/images/Home Slider/modi.jpg">
<section class="intro">
    <div class="col12">
      <a role="button" class="btn btn-default" id="magazine" href="{{url('/item')}}">Buy It Now<span class="glyphicon glyphicon-chevron-right"></span></a>
    </div>
  </section>
  </img>
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
<!--<div class="banner header-offset">
  <img src="/assets/images/IMG_2266.JPG">
  <section class="intro">
    <div class="col12">
      <a role="button" class="btn btn-default" id="magazine" href="/item">Buy It Now<span class="glyphicon glyphicon-chevron-right"></span></a>
    </div>
  </section>
  </img>
</div>-->
<section class="jumbotron description">
  <p>We at Business Bugs commit to get you what is best for business. The right news/views, at the right platform at the right time will be our working direction. We will ensure that we thrive towards our motto of making everybody self-reliant & confident who is seeking entrepreneurship as the career choice.  Every month, our endeavor will be to give insights about the new business segments in the simplest way. From how to make a photography enthusiast become a professional photographer, to how to transform a content writer into a blogger; we will continue to engage the people around.

Our belief is to bring a revolution in the entrepreneurship market. We aim to reach approximately 10 lakh readers in this year. We will continue till we make entrepreneurship as the new cool. 
  </p>
  </section>
@endsection