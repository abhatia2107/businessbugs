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
			    /*font-size: 60px;*/
			    color: black;
			    
			}
			
			h2{
				top:110px;
				bottom:-280px;
				left:250px;
				/*font-size: 40px;*/
				color:black;
			}
			h3{
				top:110px;
				bottom:-280px;
				left:250px;
				/*font-size: 30px;*/
				color:black;
			}
			p{
				top:110px;
				bottom:-280px;
				left:250px;
				/*font-size: 30px;*/
				color:black;
			}
			.maincontent{
				text-align: center;
			}
		</style>
		<div class="main-container">
			<div class="maincontent lead text-center">
				<h1>At Business Bugs our endeavor is to promote entrepreneurship to the new levels.  </h1>
				<h2>We don't hire you basically but you partner with us. </h2>
				<h2 style="color:black">YOU DO THE WORK &amp; YOU GET PAID. </h2>
				<h3>We are hiring Creative writers, designers & video production guys. </h3>
				<h4>If you are interested , send us your resume with a cover letter to <a href="mailto:contact@businessbugs.in"> contact@businessbugs.in</a></h4>
				<h4>We will get in touch with you within 24 hours guaranteed. </h4>
				<h4>If you want to launch any product or service or you have any business idea that you want to share with us,</h4>
				<h4>write at<a href="mailto:contact@businessbugs.in"> contact@businessbugs.in</a></h4>
				<!-- <button class="button1 btn">GIVE ME ANOTHER REASON </button> -->
				<!-- <button class="button1 btn">I AM CONVINCED </button> -->
			</div>
		</div>
@stop
