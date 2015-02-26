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
			<div class="maincontent">
				<h1>WHY SHOULD I WORK AT </h1>
				<h1>businessbugs.in?</h1>
				<p> WE BELIEVE IN CREATING ENTREPRENEURS, NOT EMPLOYEES.</p>
				<p> IF YOU'RE CONVINCED WITH US AND WANT TO GROW ALONG WITH US</p>
				<p> SEND YOUR PROFILE AT</p>
				<p><a href="mailto:careers@businessbugs.in"> careers@businessbugs.in</a></p>
				<!-- <button class="button1 btn">GIVE ME ANOTHER REASON </button> -->
				<!-- <button class="button1 btn">I AM CONVINCED </button> -->
			</div>
		</div>
@stop