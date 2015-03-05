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
					Thanks for purchasing our {{$magazine}}. Please find attached your copy of business bugs. You must have recieved a mail from PayUMoney also which contains your invoice. Kindly open the mail and click on Release Payment button.
				</p>
				<p style="font-size:120%; color:#000;">
					Welcome to Business Bugs - India's First Entrepreneurship E - Commerce Platform. Business Bugs is the platform for the entrepreneurs  & by the entrepreneurs. 
					@if($magazine!="Annual Subscription")
						You can also buy our annual subscription for just Rs 300 (38% off). 
					@endif
					Visit <a href="www.businessbugs.in">www.businessbugs.in</a> for more.
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