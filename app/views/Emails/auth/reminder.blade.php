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
				<p style="font-size:120%; color:#000;">
						To reset your password, click this button: .<br/>
					<div style="text-align:center;">
						<a href="{{ URL::to('/users/password/reset', array($token)) }}">
							<button type="button" style="color: #fff; background-color: #5cb85c;border-color: #4cae4c;color: #fff;background-color: #449d44;border-color: #398439;background-color: #5cb85c;padding: 10px 16px;font-size: 18px;line-height: 1.33;border-radius: 6px; ">
								Reset Password
							</button>
						</a>
					</div>
						This link will expire in {{ Config::get('auth.reminder.expire', 12) }} hours.
				</p>
				<p style="font-size:120%; color:#000;">
					Regards<br/>
					Shivam Trehan<br/>
					Founder Business Bugs<br/>
				<p style="font-size:120%; color:#000;">
				<p style="font-size:85%; color:#444;">
									
					You can like our Facebook page www.facebook.com/businessbugs<br/>
					You can like our Twitter page twitter.com/Business_Bugs<br/>
					Business Bugs Blog businessbugs.blogspot.in<br/>
					Official YouTube Channel Business Bugs. www.youtube.com/channel/UCWNvWJLEZ6eHBOZTRiZ1aoQ<br/>
					For any queries, reach out to us at: <a href="mailto:contact@businessbugs.in">contact@businessbugs.in</a>
				</p>
				<p style="font-size:85%; text-align:center; color:#444;">
					&#169; 2015 businessbugs.in
				</p>
			</div>
		</div>
	</body>
</html>