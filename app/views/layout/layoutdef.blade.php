<html>
	<head>
		<link rel="stylesheet" href="/assets/bootstrap/css/bootstrap.min.css">
		<link rel="stylesheet" href="/assets/bootstrap/css/bootstrap-theme.min.css">
		<link rel="stylesheet" href="/assets/css/mystyle.css">
		<link rel="stylesheet" href="/assets/css/font-awesome.css">

		<!-- page specific stylesheets -->
		@yield('pagestylesheet')
		<title>
			BUSINESSBUGS
		</title>
	</head>
	<body>
		@include("pop-ups.popups")
		@include("templates.header")
		@yield("contents")

		<div class="gap"></div>
		@include("templates.footer")


		<script src="/assets/bootstrap/js/bootstrap.min.js"></script>

	</body>
</html>