@section('header')

	<div class="navbar-header"> 
		<div clas="main-container">
			<div class="logo pull-left col-md-4 col-sm-4 col-xs-12">
				<a href="#">
					<img src="/assets/images/businessbugs_logo.jpg" alt="Brand">
				</a>
            </div>
			<div class="pull-right col-md-8 col-sm-8 col-xs-12">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"> 
	        		<span class="sr-only"> Toggle navigation </span> <span class="icon-bar"> </span> 
	        		<span class="icon-bar"> </span> 
	        		<span class="icon-bar"> </span> 
      			</button>
      			<div class="navbar-collapse collapse">
					<ul class="nav navbar-nav nav-tabs">
						<li>
							<a href="/">ABOUT US</a>
						</li>
						<li>
							<a href="/">TEAM</a>
						</li>
						<li>
							<a href="/">PRODUCTS &#38; SERVICES</a>
						</li>
						<li>
							<a href="/">WE ARE HIRING</a>
						</li>
						<li>
							<a href="/">CONTACT</a>
						</li>
						<li>
							<a href="/">FOOD MAD</a>
						</li>
					</ul>
				</div>
				<div class="col-md-12 col-sm-12">
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
					    	<a href="#" data-toggle="modal" data-target="#loginModal"><span class="hidden-xs">LogIn</span><i class="glyphicon glyphicon-log-in visible-xs"></i></a>
					    </li>
					    <li> 
							<a href="#" data-toggle="modal" data-target="#signupModal"><span class="hidden-xs">Sign Up</span><i class="glyphicon glyphicon-user visible-xs"></i></a>	
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
