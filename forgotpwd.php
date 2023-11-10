<!DOCTYPE HTML>
<html>
	<head>
		<title>Book Store</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css" />
		<link rel="stylesheet" href="assets/css/main.css" />
		<noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
	</head>
	<body class="is-preload">
		<!-- Wrapper -->
			<div id="wrapper">

				<!-- Header -->
				<header id="header">
					<div class="inner">

						<!-- Logo -->
							<a href="index.php" class="logo">
									<span class="fa fa-book"></span> <span class="title">Book Online Store Website</span>
								</a>

						<!-- Nav -->
							<nav>
								<ul>
									<li><a href="#menu">Menu</a></li>
								</ul>
							</nav>

					</div>
				</header>

			<!-- Menu -->
				<nav id="menu">
					<h2>Menu</h2>
					<ul>
						<li><a href="index.php" >Home</a></li>

						<li><a href="products.php">Products</a></li>

						<li><a href="checkout.php">Checkout</a></li>

						<li>
							<a href="#" class="dropdown-toggle">About</a>

							<ul>
								<li><a href="about.php">About Us</a></li>
								<li><a href="blog.php" >Blog</a></li>
								<li><a href="testimonials.php">Testimonials</a></li>
								<li><a href="terms.php">Terms</a></li>
							</ul>
						</li>

						<li><a href="contact.php">Contact Us</a></li>

                        <li><a href="login.php">Login</a></li>

						<li><a href="register.php">Register</a></li>
					</ul>
				</nav>


				<!-- Footer -->
					<footer id="footer">
                        <div class="inner">
							<h1>Restore account</h1>
						</div>
                        
						<div class="inner">
							<section>
								<form method="get" action="forgotpwdprocess.php">
									<div class="fields">

										<div class="field">
											<input type="text" name="pwd" id="pwd" placeholder="Password">
										</div>
                                        <div class="field">
											<input type="text" name="repwd" id="repwd" placeholder="Password">
										</div>
										<div class="field text-right">
											<ul class="actions">
												<li><input type="submit" value="Submit" class="primary"></li>
											</ul>
										</div>
                                        
									</div>
								</form>
							</section>
							<section>
								<h2>Don't have an account:</h2>

								<ul class="alt">
									<li><a href="register.php">Register</a></li>
									<li></li>
								</ul>
							</section>

							
						</div>
					</footer>

			</div>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/bootstrap/js/bootstrap.bundle.min.js"></script>
			<script src="assets/js/jquery.scrolly.min.js"></script>
			<script src="assets/js/jquery.scrollex.min.js"></script>
			<script src="assets/js/main.js"></script>
	</body>
</html>							