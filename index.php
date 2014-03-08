<!DOCTYPE html>
<html lang="en" >
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<meta charset="utf-8">
		<title>YYNOTE.COM</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="">
		<meta name="author" content="">

		<!-- css -->
		<link href="assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">
		<link href="assets/bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet">
		
		
		<link href="assets/fontawesome/css/font-awesome.css" rel="stylesheet">

		<link href="assets/css/style.css" rel="stylesheet" />
		<link href="assets/css/default.css" rel="stylesheet" />
		

		<!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
		<!--[if lt IE 9]>
		<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->

		<!-- Fav and touch icons -->
		<!-- Fav and touch icons -->
		<link rel="apple-touch-icon-precomposed" sizes="144x144" href="apple-touch-icon-144x144-precomposed.png">
		<link rel="apple-touch-icon-precomposed" sizes="114x114" href="apple-touch-icon-114x114-precomposed.png">
		<link rel="apple-touch-icon-precomposed" sizes="72x72" href="apple-touch-icon-72x72-precomposed.png">
		<link rel="apple-touch-icon-precomposed" href="apple-touch-icon-57x57-precomposed.png">
		<link rel="shortcut icon" href="favicon.ico">
	</head>

	<body>

		<div id="wrapper">

			<!-- start header -->
			<header>
				<div class="container">

					<div class="row nomargin">
						<div class="span12">
							<div class="headnav">
								<ul>
									<li>
										<a href="#mySignup" data-toggle="modal"><i class="icon-user"></i>&nbsp;&nbsp;Sign up</a>
									</li>
									<li>
										<a href="#mySignin" data-toggle="modal">Sign in</a>
									</li>
								</ul>
							</div>

							<!-- Signup Modal -->
							<div id="mySignup" class="modal styled hide fade" tabindex="-1"
							role="dialog" aria-labelledby="mySignupModalLabel" aria-hidden="true">
								<div class="modal-header">
									<button type="button" class="close" data-dismiss="modal" aria-hidden="true">
										×
									</button>
									<h4 id="mySignupModalLabel">Create an <strong>account</strong></h4>
								</div>
								<div class="modal-body">
									<form class="form-horizontal">
										<div class="control-group">
											<label class="control-label" for="inputEmail">Email</label>
											<div class="controls">
												<input type="text" id="inputEmail" placeholder="Email">
											</div>
										</div>
										<div class="control-group">
											<label class="control-label" for="inputSignupPassword">Password</label>
											<div class="controls">
												<input type="password" id="inputSignupPassword" placeholder="Password">
											</div>
										</div>
										<div class="control-group">
											<label class="control-label" for="inputSignupPassword2">Confirm Password</label>
											<div class="controls">
												<input type="password" id="inputSignupPassword2" placeholder="Password">
											</div>
										</div>
										<div class="control-group">
											<div class="controls">
												<button type="submit" class="btn">
													Sign up
												</button>
											</div>
											<p class="aligncenter margintop20">
												Already have an account? <a href="#mySignin" data-dismiss="modal" aria-hidden="true" data-toggle="modal">Sign in</a>
											</p>
										</div>
									</form>
								</div>
							</div>
							<!-- end signup modal -->

							<!-- Sign in Modal -->
							<div id="mySignin" class="modal styled hide fade" tabindex="-1" role="dialog" aria-labelledby="mySigninModalLabel" aria-hidden="true">
								<div class="modal-header">
									<button type="button" class="close" data-dismiss="modal" aria-hidden="true">
										×
									</button>
									<h4 id="mySigninModalLabel">Login to your <strong>account</strong></h4>
								</div>
								<div class="modal-body">
									<form class="form-horizontal">
										<div class="control-group">
											<label class="control-label" for="inputText">Username</label>
											<div class="controls">
												<input type="text" id="inputText" placeholder="Username">
											</div>
										</div>
										<div class="control-group">
											<label class="control-label" for="inputSigninPassword">Password</label>
											<div class="controls">
												<input type="password" id="inputSigninPassword" placeholder="Password">
											</div>
										</div>

										<div class="control-group">
											<div class="controls">
												<button type="submit" class="btn">
													Sign in
												</button>
											</div>
											<p class="aligncenter margintop20">
												Forgot password? <a href="#myReset" data-dismiss="modal" aria-hidden="true" data-toggle="modal">Reset</a>
											</p>
										</div>
									</form>
								</div>
							</div>
							<!-- end signin modal -->

							<!-- Reset Modal -->
							<div id="myReset" class="modal styled hide fade" tabindex="-1" role="dialog" aria-labelledby="myResetModalLabel" aria-hidden="true">
								<div class="modal-header">
									<button type="button" class="close" data-dismiss="modal" aria-hidden="true">
										×
									</button>
									<h4 id="myResetModalLabel">Reset your <strong>password</strong></h4>
								</div>
								<div class="modal-body">
									<form class="form-horizontal">
										<div class="control-group">
											<label class="control-label" for="inputResetEmail">Email</label>
											<div class="controls">
												<input type="text" id="inputResetEmail" placeholder="Email">
											</div>
										</div>

										<div class="control-group">
											<div class="controls">
												<button type="submit" class="btn">
													Reset password
												</button>
											</div>
											<p class="aligncenter margintop20">
												We will send instructions on how to reset your password to your inbox
											</p>
										</div>
									</form>
								</div>
							</div>
							<!-- end reset modal -->

						</div>
					</div>
					<div class="row">
						<div class="span4">
							<div class="logo">
								<a href="/index.html"><img src="assets/img/logo.png" alt="" class="logo"></a>
								<h1>Write down your ideas anywhere!</h1>
							</div>
						</div>
						<div class="span8">
							<div class="navbar navbar-static-top">

								<div class="navigation">
									<nav>
										<ul class="nav topnav bold" >
											<li class="dropdown active">
												<a href="#">Home </a>
												<!--
												<a href="#" class="dropdown-toggle" data-toggle="dropdown">Home <i class="icon-angle-down"></i></a>

												<ul class="dropdown-menu bold">
												<li>
												<a href="#">Homepage 2</a>
												</li>
												<li>
												<a href="#">Homepage 3</a>
												</li>
												</ul>
												-->
											</li>

											<li class="dropdown">
												<a href="#" >Features </a>
											</li>

											<li class="dropdown">
												<a href="#">Help </a>
											</li>

											<li>
												<a href="#" >Contact us </a>
											</li>
										</ul>
									</nav>
								</div><!-- end navigation -->

							</div>
						</div>
					</div>
				</div>
			</header>
			<!-- end header -->

		</div>

		<!-- javascript
		================================================== -->
		<script src="assets/js/jquery-1.10.1.min.js"></script>
		<script src="assets/js/jquery-ui-1.10.3.custom.min.js"></script>
		<script src="assets/bootstrap/js/bootstrap.min.js"></script>
		

	</body>
</html>