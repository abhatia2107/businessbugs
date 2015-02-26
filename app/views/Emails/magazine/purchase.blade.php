<!DOCTYPE html>
<!-- When user subscribed for the email from our website, this is a confirmation email. -->
<html lang="en-US">
	<head>
		<meta charset="utf-8">
	</head>
	<body>
		<h2>Business Bugs</h2>

		<div>
			You have successfully purchased.<br/>
			<!-- your subscription email body -->
		</div>
	</body>
</html>
<!DOCTYPE html>
<html>
	<head>
	</head>
	<body class="body" style="background:#eef0f1;">
		<div style="padding:25px ;margin-right: auto;margin-left: auto;">
			<div style="background:#fff; color:#000; max-width: 100%;  padding: 20px 0px 20px 25px;border-radius: 15px;">
				<div  style="text-align:center;">
					<h1 style="color:#000;  margin-right : 25px;">	
						BUSINESS BUGS
					</h1>
				</div>
				<h1 style="font-size:150%; color:#000;">	
					Dear {{ $name}},
				</h1>
				<p style="font-size:120%; color:#000;">
					Thanks for purchasing Business Bugs {{$magazine}}. Please find attached your copy of business bugs.
				</p>
				<p style="font-size:85%; color:#444;">
					For any queries, reach out to us at: <a href="mailto:contact@businessbugs.in">contact@businessbugs.in</a>
				</p>
				<p style="font-size:85%; text-align:center; color:#444;">
					&#169; 2015 businessbugs.in
				</p>
			</div>
		</div>
	</body>
</html>