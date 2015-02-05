<!DOCTYPE html>
<!-- When user sign up but didn't verified his/her email ID, this is a reminder email to verify your account. -->
<html lang="en-US"
	<head>
		<meta charset="utf-8">
	</head>
	<body>
		<h2>Password Reset</h2>
		<!-- TO DO: Send your name along with the mail. -->
		<div>
			To reset your password, complete this form: {{ URL::to('/users/password/reset', array($token)) }}.<br/>
			This link will expire in {{ Config::get('auth.reminder.expire', 12) }} hours.
		</div>
	</body>
</html>
