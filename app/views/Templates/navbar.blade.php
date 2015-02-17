@section('navbar')
<div class="main-container"> 
<div class="navbar-header">
		<div class="container">
			
  			<div class="row">
		      	<a class="navbar-brand" href="/">
		       		<img src="/assets/images/bblogo.jpeg"/>
		      	</a>
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
					<div class="pull-right">
	         			
	          				<ul class="nav navbar-nav nav-tabs">
					            <li>
									<a href="#" data-toggle="modal" data-target="#loginModal"><span class="hidden-xs">LogIn</span><i class="glyphicon glyphicon-log-in visible-xs"></i></a>
						           	<!-- <a href="#" data-target="#ModalLogin">
						           		<i class="glyphicon glyphicon-user"></i>
						          	    <span> Sign </span> 
	   									<span> In </span> 
						            </a> -->
					        	</li>
					          	<li> 
									<a href="#" data-toggle="modal" data-target="#signupModal"><span class="hidden-xs">Sign Up</span><i class="glyphicon glyphicon-user visible-xs"></i></a>	
					            	<!-- <a href="#" data-target="#ModalSignup">
					            		<span> Sign </span>
					            		<span> Up </span>
					            	</a>  -->
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