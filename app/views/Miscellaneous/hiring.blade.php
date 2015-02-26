@extends('Layouts.layout')
@section('content')
		<style type="text/css">
		.background{ 
		background: url('http://s4.scoopwhoop.com/wah/img/weareghiring.jpg'); no-repeat center center fixed; 
		-webkit-background-size: cover;
		-moz-background-size: cover;
		-o-background-size: cover;
		background-size: cover;
		}
		
		.button {
			background-image: url("http://www.scoopwhoop.com/wp-content/themes/scoop_whoop/images/logo.jpg");
			height: 100px;
			width:100px;
			-moz-border-radius: 8px;
		  -webkit-border-radius: 8px;
		  border-radius: 8px;
		 
		    transition: .5s ease;
		    top: 10px;
		    left: -50px;
		    right: -1000px;
		    bottom: 0px;

		  
			background-position: center;
		}
		.button1
		{
			text-align: center;
			background-color: yellow;
			width:211px;
			-moz-border-radius: 26px;
		  -webkit-border-radius: 26px;
		  border-radius: 26px;
		    bottom:-240px;
			    top:150px;
			    left:280px;
			    font-weight: bold;
			    padding: 10px,0px;
			    margin-right: 10px;
			    line-height: 29px;
			}
			h1{
			    top:80px;
			    bottom:-260px;
			    font-size: 72px;
			    color: yellow;
			    
			}
			p{
				top:110px;
				bottom:-280px;
				left:250px;
				font-size: 30px;
				color:yellow;
			}
			.maincontent{
				text-align: center;
			}
		</style>
		<div class="main-container background">
			
			<button class="button"></button>
		<div class="maincontent">
		<h1><large>businessbugs.in? </large></h1>
			<p> WE PLAN TO REACH OUT 20 MILLION+</p>
			<p> PEOPLE EVERY MONTH.</p>
			<button class="button1 btn-grp">GIVE ME ANOTHER REASON </button>
			<button class="button1 btn-grp">I AM CONVINCED </button>
			</div>
		</div>
@stop