<!DOCTYPE html>
<!-- When user sign up, this is a verification email. -->
<html lang="en-US">
	<head>
		<meta charset="utf-8">
	</head>
	<body>
		<h2>Hello Admin</h2>
		<h4>Feedback Mail from {{$feedback_email}}</h4>
		<pre>
			<h4> Subject:</h4>{{$feedback_subject}}
			<h4>Description:</h4> {{$feedback_description}}
		</pre>
	</body>
</html>