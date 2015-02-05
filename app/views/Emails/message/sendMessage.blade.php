<!DOCTYPE html>
<!-- When user sign up, this is a verification email. -->
<html lang="en-US">
	<head>
		<meta charset="utf-8">
	</head>
	<body>
		<h2>Hello Vendor</h2>
		<pre>
			<h4>Message from {{$msgInputName}}{{$msgInputEmail}}{{$msgInputNumber}}</h4>
			<h4>Message:</h4> {{$msgInputMessage}}
		</pre>
	</body>
</html>
