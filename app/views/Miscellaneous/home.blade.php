@extends('Layouts.layout')
@section('content')
<div class="overlay-slider">
<div class="homepage-cover">
   <div class="container">
      <div class="hobby_search_listings">
         <div>
            <h1>{{$homeLang['home_title']}}</h1>
            <h2>{{$homeLang['home_subtitle']}}</h2>
         </div><br>
         <div  data-location="" data-keywords="" data-show_filters="true" data-show_pagination="false" data-per_page="500" data-orderby="featured" data-order="DESC" data-categories="">   
            <form action="/filters/search" method="get" role="form">
               <div class="row">
                  <div class="col-md-4 col-sm-3">
                     <div class="form-group" >
                        <input type="text" class="form-control"  name='keyword' id='search_keywords' placeholder='{{$homeLang['home_keyword']}}' />
                     </div>
                  </div>
                  <div class="col-md-4 col-sm-3">
                     <div class="form-group" >
                        <select name="category_id" id="search_categories" class="postform element-select" >
                           <option value="0">{{$homeLang['home_category']}}</option>
                           @if(isset($categories))
                              @foreach($categories as $data)
                                 <option value="{{$data->id}}">{{$data->category}}</option>
                              @endforeach
                           @endif
                        </select>
                     </div>
                  </div>
                  <!--<div class="col-md-3 col-sm-3">
                     <div class="form-group" >
                        <select name="location_id" id="search_locations" class="postform">
                           <option value="0">{{$homeLang['home_location']}}</option>
                           @if(isset($locations))
                              @foreach($locations as $data)
                                 <option value="{{$data->id}}" >{{$data->location}}</option>
                              @endforeach
                           @endif
                        </select>
                     </div>
                  </div> -->
                  <input type="hidden" name="chunk" value="0">
                  <div class="col-md-3 col-sm-3">
                     <button type="submit" class="btn btn-primary">{{$homeLang['home_search_button_text']}}</button>
                  </div>
               </div>
            </form>
         </div>
      </div>
   </div>
</div>
</div>
<div class="container categories_container">
   <h1>{{$homeLang['home_category_title']}}</h1>
   <h2 class="home-widget-description">{{$homeLang['home_category_subtitle']}}</h2><br><br>
   <div class="row" id='category-list-items'>
      @if(isset($categories))
         @foreach($categories as $data)
            <div class="col-xs-12 col-sm-4 col-md-3 column">
            <div class="home-category-type">
               <a style="cursor:pointer" href='/filter/categories/{{$data->id}}/locations/0'><div class="photo_caption">{{$data->category}}</div></a>
               <div>
                  <img src="/assets/images/home/recent.jpg"/>  
               </div> 
               <figcaption>
                  <a style="cursor:pointer" href='/filter/categories/{{$data->id}}/locations/0'><div id="photo_caption">{{$data->category}}</div></a>
               </figcaption>                                
            </div>

            </div>
         @endforeach
      @endif   
   </div>
</div>
<div id="batch_recent_listings" class="batch_recent_listings">
   <h1>{{$homeLang['home_featured_title']}}</h1>
   <h2>{{$homeLang['home_featured_subtitle']}}</h2><br>
   <div class="recent_listings container">
       @if(isset($featuredBatches))
         @foreach($featuredBatches as $data)
            <div id="" class="col-xs-12 col-sm-4 col-md-3">
               <div class="recent_listings-item">
                  <div>
                     <img src="/assets/images/home/recent.jpg"/>  
                  </div> 
                  <div class="recent_listings-info">
                     <div class="recent_listing_rating">
                        <span class="stars">{{$data->institute_rating}}</span>
                     </div>
                  <div class="contact_address_info">   
                     <header>
                        <div>
                           <span class="glyphicon glyphicon-home"></span>{{$data->locality}}, {{$data->location}}
                        </div>
                        <div>
                           <span class="glyphicon glyphicon-phone">{{$data->venue_contact_no}}</span>
                        </div>
                     </header>
                     <footer>
                        <a href="/batches/show/{{$data->id}}" >{{$data->batch}}</a>
                     </footer>
                  </div>
               
                  </div>
               </div>
            </div>
         @endforeach
      @endif 
   </div>
</div>
<div class="container">
</div>
@stop
@section('pagejquery')
<script type="text/javascript">
   $.fn.stars = function() {
    return $(this).each(function() {
        // Get the value
        var val = parseFloat($(this).html());
        // Make sure that the value is in 0 - 5 range, multiply to get width
        var size = Math.max(0, (Math.min(5, val))) * 16;
        // Create stars holder
        var $span = $('<span />').width(size);
        // Replace the numerical value with stars
        $(this).html($span);
    });
   }
   $(function() {
    $('span.stars').stars();
   });
</script>
<br>
<br>
@stop