<!DOCTYPE html>
<html lang="en">
	<head>
		@include('Templates.Admin.head')
	    @yield('pagestylesheet')
	</head>
	
	<body> <!--  style="background:white" class="home page page-id-6 page-template page-template-page-templates page-template-template-home page-template-page-templatestemplate-home-php custom-background template-home  directory-fields color-scheme-default footer- woocommerce-social-login listify-child wp-job-manager-categories-enabled wp-job-manager-categories-only" -->
		<div> <!--  id="page" class="hfeed site" -->
			<!--Header Section contains sign-in sign-up searchbox and logo -->
			<header class="layout_header" >
				@include('Templates.Admin.headerAdmin')
			</header>
			
			<div id="wrapper">
				<div id="page-wrapper">
					<div class="container-fluid">
						<!-- Page Heading -->
						<div class="row">
							<div class="col-lg-12">
								<h1 class="page-header">
									{{ucwords(str_replace("/"," ",$tableName))}}
									<small></small>
								</h1>
							</div>
						</div>
						<!-- /.row -->
						@include('Templates.Admin.listing')
						<!-- Error and success messages -->
						@include('Templates.message')
						@yield('content')
					</div>	
				</div>
			</div>
		</div>
	    @yield('pagejavascript')	    
	    <!--this page specific jquery-->
	    @yield('pagejquery')
	</body>
</html>