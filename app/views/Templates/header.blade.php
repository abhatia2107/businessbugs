@section('header')
	<style type="text/css">
		.nav-text {
			color: #222;
			text-decoration: none;
			text-transform: uppercase;
			font-size: 1.2em;
			font-weight: 700;	
			padding: 5px 10px;
			display: block;
		}
		.nav-text a{
			color: #222;
			text-decoration: none;
			text-transform: uppercase;
			font-size: 1.2em;
			font-weight: 700;	
			padding: 5px 10px;
			display: block;
		}
	</style>

	<div class="navbar-header"> 
		<div class="main-container">
			<div class="logo pull-left col-md-4 col-sm-5 col-xs-12">
				<a href="/">
					<img src="/assets/images/businessbugs_logo.jpg" alt="Business Bugs">
				</a>
            </div>
			<div class="header_right col-md-8 col-sm-7 col-xs-12">
					<ul class="nav navbar-nav nav-tabs">
						<li>
							<a class="nav-text" href="/aboutus">ABOUT US</a>
						</li>
						<li>
							<a class="nav-text" href="/team">TEAM</a>
						</li>
						<li>
							<a class="nav-text" href="/services">PRODUCTS &#38; SERVICES</a>
						</li>
						<li>
							<a class="nav-text" href="/we-are-hiring">WE ARE HIRING</a>
						</li>
						<li>
							<a class="nav-text" href="/contactus">CONTACT</a>
						</li>
						<li>
							<a class="nav-text" href="/food-mad">FOOD MAD</a>
						</li>
					</ul>
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
					<ul class="nav navbar-nav nav-text nav-tabs">
					    <li>
					    	<a href="#" data-toggle="modal" data-target="#loginModal"><span>LogIn</span></a>
					    </li>
					    <li> 
							<a href="#" data-toggle="modal" data-target="#signupModal"><span>Sign Up</span></a>	
					    </li>
					</ul>
					    
		        
		        @else
		        	
	         			
	          		<ul class="nav navbar-nav nav-text nav-tabs">
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
							<!-- <a href="/users/logout"><span class="hidden-xs">Logout</span><i class="glyphicon glyphicon-log-out visible-xs"></i></a> -->
							<a href="/users/logout">Logout</a>
					    </li>
					</ul>
				 
		       	@endif
		       	</div>
			</div>
		</div>	
	</div>    

	@show
