@section('header')

	<div class="navbar-fixed-top" role="navigation">
	<!-- navbar-top starts -->
		<div class="navbar-top">
	    	<div class="container">
		      	<div class="row">
			        <div class="pull-right">
			            <ul class="nav navbar-nav nav-tabs">
			            	<li> 
			            		<a href="#"><span class="hidden-xs">Home</span> <i class="glyphicon glyphicon-home hide visible-xs "></i> </a>
			            	</li>
					        <li> 
					        	<a href="#"><span class="hidden-xs">Contact Us</span> <i class="glyphicon glyphicon-phone-alt hide visible-xs "></i> </a> 
					        </li>
					        <li> 
					        	<a href="#"><span class="hidden-xs">About Us</span> <i class="glyphicon glyphicon-info-sign hide visible-xs "></i></a>
					        </li>
					    </ul>
			        </div>
			    </div>	
	    	</div>
		</div>

		<!-- navbar-top ends -->
		<!-- navbar-header starts -->
	
			<div class="navbar-header">
			<div class="container">
    			<button type="button" class="navbar-toggle pull-right" data-toggle="collapse" data-target=".navbar-collapse"> 
        			<span class="sr-only"> Toggle navigation </span> <span class="icon-bar"> 
        			</span> 
        			<span class="icon-bar"> </span> 
        			<span class="icon-bar"> </span> 
      			</button> 
      			<div class="row">
			      	<a class="navbar-brand" href="/">
			       		<img src="/assets/images/bblogo.jpeg"></img>
			      	</a>
		      		<div class="pull-right">
             			<div class="navbar-collapse collapse">
              				<ul class="nav navbar-nav">
					           <li>
						           	<a href="#" data-target="#ModalLogin">
						           		<i class="glyphicon glyphicon-user"></i>
						          	    <span> Sign </span> 
       									<span> In </span> 
						            </a>
					        	</li>
					          	<li> 
					            	<a href="#" data-target="#ModalSignup">
					            		<span> Sign </span>
					            		<span> Up </span>
					            	</a> 
					            </li>
					        </ul>
					    </div>
		          	</div>
		      	</div>
		    </div>
		</div>
		<!-- navbar-header ends -->
	</div>
  		
 @show