@section('navbar')
<div class="main-container"> 
	<div class="navbar-header">
		<div class="container">
			<button type="button" class="navbar-toggle pull-right" data-toggle="collapse" data-target=".navbar-collapse"> 
    			<span class="sr-only"> Toggle navigation </span> 
    			<span class="icon-bar"> </span> 
    			<span class="icon-bar"> </span> 
    			<span class="icon-bar"> </span> 
  			</button> 
  			<div class="row">
		      	<a class="navbar-brand" href="/">
		       		<img src="/assets/images/businessbugs_logo.jpg"/>
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
	         			<div class="navbar-collapse collapse">
	          				<ul class="nav navbar-nav">
					            <li>
									<a href="#" data-toggle="modal" data-target="#loginModal">Log In</a>
						           	<!-- <a href="#" data-target="#ModalLogin">
						           		<i class="glyphicon glyphicon-user"></i>
						          	    <span> Sign </span> 
	   									<span> In </span> 
						            </a> -->
					        	</li>
					          	<li> 
									<a href="#" data-toggle="modal" data-target="#signupModal">Sign Up</a>	
					            	<!-- <a href="#" data-target="#ModalSignup">
					            		<span> Sign </span>
					            		<span> Up </span>
					            	</a>  -->
					            </li>
					        </ul>
					    </div>
		          	</div>
		        @else
		        	<div class="pull-right">
	         			<div class="navbar-collapse collapse">
	          				<ul class="nav navbar-nav">
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
									<a href="/users/logout" >Logout</a>	
					            </li>
					        </ul>
					    </div>
		          	</div>
		       	@endif
	      	</div>
	    </div>
	</div>
</div>
@show