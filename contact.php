<!DOCTYPE HTML>
<html>
	<head>
		<title>Dr. Francisco Rubio | Ophthalmology clinic</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css" />
		<link rel="stylesheet" href="assets/css/main.1.css" />
		<noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
		<link rel="icon" type="image/jpg" href="images/logo3.png" />
		
	</head>
	<body class="is-preload">

		<!-- Wrapper -->
			<div id="wrapper">

				<!-- Header -->
				<header id="header" class="alt">
				<img src="images/logo4_blanco.png" alt="LOGO" class="nav-brand" />
					<a href="index.php" class="logo"><strong>Dr. Francisco Rubio</strong> <span>Ophthalmology</span></a>
					<nav>
						<a href="#menu">Menu</a>
					</nav>
				</header>
				<hr>

				<!-- Menu -->
				<nav id="menu">
					<ul class="links">
		                <li class="active"> <a href="index.php">Home </a> </li>

		                <li> <a href="illnesses.php">Visual Pathologies</a> </li>

		                <li> <a href="about-us.php">About Us</a> </li>

		                <li> <a href="team.php">Team</a> </li>

						<li> <a href="news.php">News</a> </li>

		                <li><a href="contact.php">Contact Us</a></li>
            		</ul>
				</nav>

				<!-- Contact -->
					<section id="contact">
						<div class="inner">
							<section>
								<header class="major">
									<h2>Contact us</h2>
									<p><h3>We will get back to you as soon as possible</h3></p>
								</header>

								<form method="post" action="#">
									<div class="fields">
										<div class="field half">
											<label for="name">Name</label>
											<input type="text" name="name" id="name" required name="name" />
										</div>
										<div class="field half">
											<label for="email">Email</label>
											<input type="text" name="email" id="email" required name="e_mail" />
										</div>
										<div class="field">
											<label for="subject">phone</label>
											<input type="text" name="phone" id="phone" required name="phone"/>
										</div>
										<div class="field">
											<label for="message">message</label>
											<textarea name="message" id="message" rows="6" required name="message"></textarea>
										</div>

										<div class="field half text-right">
											<ul class="actions">
												<li><input type="submit" name="register" class="primary" /></li>
											</ul>
										</div>
									</div>
								</form>
							</section>
							<section class="split">
								<section>
									<div class="contact-method">
										<span class="icon alt fa-envelope"></span>
										<h3>Email</h3>
										<a href="#">Franciscorubio@gmail.com</a>
									</div>
								</section>
								<section>
									<div class="contact-method">
										<span class="icon alt fa-phone"></span>
										<h3>Phone</h3>
										<span>+52 3329593012</span>
										<br>
										<span></span>
									</div>
								</section>
								<section>
									<div class="contact-method">
										<span class="icon alt fa-home"></span>
										<h3>Address</h3>
										<span>C. 16 de Septiembre 184, Sin Nombre, 47760 Atotonilco el Alto, Jal., México</span>
									</div>
								</section>
							</section>
						</div>
					</section>

									<!-- Main -->
									<div id="main" class="alt">

<!-- One -->
	<section id="one">
		<div class="inner">
			<header class="major">
				<h1>Location</h1>
			</header>
			
			<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3735.8217912564724!2d-102.51092918507531!3d20.554471186257192!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x842ecb4abf93c5e3%3A0xc34e23885c73055f!2sOftalmologo%20Dr.%20Francisco%20Rubio!5e0!3m2!1ses-419!2snz!4v1632107474661!5m2!1ses-419!2snz" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
		</div>
	</section>

</div>


				<!-- Footer -->
				<footer id="footer">
					<div class="inner">
						<ul class="icons">
							<li><a href="#" class="icon alt fa-twitter"><span class="label">Twitter</span></a></li>
							<li><a href="#" class="icon alt fa-facebook"><span class="label">Facebook</span></a></li>
							<li><a href="#" class="icon alt fa-instagram"><span class="label">Instagram</span></a></li>
							
						</ul>
						<ul class="copyright">
							<li>Dr. Francisco Rubio | Ophthalmologist</li>							
						</ul>
					</div>
				</footer>


			</div>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/bootstrap/js/bootstrap.bundle.min.js"></script>
			<script src="assets/js/jquery.scrolly.min.js"></script>
			<script src="assets/js/jquery.scrollex.min.js"></script>
			<script src="assets/js/browser.min.js"></script>
			<script src="assets/js/breakpoints.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>
			
<!-- Database conexion	-->	
			
			<?php 
        include("registrar.php");
        ?>

	</body>
</html>