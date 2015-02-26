@section('header')
	<div style="max-width:1200px; margin:0 auto">
		<div class="row">
	    	<div class="col-md-4">
			    <div class="logo-full">
		         	<a href="/"><img src="/assets/images/businessbugs_logo.jpg"></a>
		 		</div>
	        </div>

	        <div class="col-md-8">
	            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
	                <ul class="nav navbar-nav nav-tabs">
	                    <li><a href="/aboutus">ABOUT US</a></li>
		                <li><a href="/team">TEAM</a></li>
		                <li><a href="/we-are-hiring">WE ARE HIRING</a></li>
		                <li><a href="/services">PRODUCTS &#38; SERVICES</a></li>
		                <li><a href="/contactus">CONTACT</a></li>
		                <li><a href="/food-mad">FOOD MAD</a></li>
	                </ul>
	            </div>
	            <div class="sheep">
		            <?php
						$id=Auth::id();
						if($id)
						{
							$user=User::find($id);
							if($user)
								$name=$user->user_first_name;
						}
					?>
					@if(!$id)
						<div class="">
		         			
		          				<ul class="nav navbar-nav nav-tabs">
						            <li>

										<a href="#" data-toggle="modal" data-target="#loginModal"><span class="hidden-xs">LogIn</span><i class="glyphicon glyphicon-log-in visible-xs"></i></a>

						        	</li>
						          	<li> 
										<a href="#" data-toggle="modal" data-target="#signupModal"><span class="hidden-xs">Sign Up</span><i class="glyphicon glyphicon-user visible-xs"></i></a>	
						            </li>
						        </ul>
						    
			          	</div>
			        @else
			        	<div class="pull-right">
		         			
		          				<ul class="nav navbar-nav nav-tabs">
						            <li>
										<a href="/users/show/{{$id}}">
											@if($user)
												{{$name}}'s 
											@else
												My
											@endif
												Account 
										</a>
						        	</li>
						          	<li> 
										<a href="/users/logout"><span class="hidden-xs">Logout</span><i class="glyphicon glyphicon-log-out visible-xs"></i></a>
						            </li>
						        </ul>
						    
			          	</div>
			       	@endif
	            </div>
	            
	        </div>
        </div>
    </div>
@show
