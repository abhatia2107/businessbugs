@section('header')

	<div class="navbar-header"> 
		<div clas="main-container">
			<div class="logo pull-left col-md-4 col-sm-4 col-xs-12">
				<a href="/">
					<img src="/assets/images/businessbugs_logo.jpg" alt="Business Bugs">
				</a>
            </div>
			<div class="header_right col-md-8 col-sm-8 col-xs-12">
      			<div class="col-md-12 col-sm-12 col-xs-12">
					<ul class="nav navbar-nav nav-tabs">
						<li>
							<a href="/aboutus">ABOUT US</a>
						</li>
						<li>
							<a href="/team">TEAM</a>
						</li>
						<li>
							<a href="/services">PRODUCTS &#38; SERVICES</a>
						</li>
						<li>
							<a href="/we-are-hiring">WE ARE HIRING</a>
						</li>
						<li>
							<a href="/contactus">CONTACT</a>
						</li>
						<li>
							<a href="/food-mad">FOOD MAD</a>
						</li>
					</ul>
				</div>
				<div class="col-md-12 col-sm-12 col-xs-12">
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
					<ul class="nav navbar-nav nav-tabs">
					    <li>
					    	<a href="#" data-toggle="modal" data-target="#loginModal"><span>LogIn</span></a>
					    </li>
					    <li> 
							<a href="#" data-toggle="modal" data-target="#signupModal"><span>Sign Up</span></a>	
					    </li>
					</ul>
					    
		        
		        @else
		        	
	         			
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
					    
		         
		       	@endif
		       	</div>
			</div>
		</div>	
	</div>    

	@show
