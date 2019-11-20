<?php 
$currentPage = "IEEE ・ Institute of Electrical and Electronics Engineers";
include "inc/head.inc";
?>

<body class = "has-background-light">
		<nav class="navbar is-primary">
			<div class="container">
				<div class="navbar-brand">
					<a class="navbar-item" href="index.php" style="font-weight:bold;">
						<img src="images/logo.png" alt="IEEE logo">
					</a>
					<span class="navbar-burger burger" data-target="navMenu">
						<span></span>
						<span></span>
						<span></span>
					</span>
				</div>
				<div id="navMenu" class="navbar-menu">
					<div class="navbar-end">
						<a href="history.php" class="navbar-item">About IEEE</a>
						<a href="ur.php" class="navbar-item">UofR Chapter</a>
						<a href="rochester.php" class="navbar-item">Rochester Section</a>
						<a href="contact.php" class="navbar-item">Contact Us</a>
					</div>
				</div>
			</div>
		</nav>
			  
	<main>
		<h1 class = "title is-2">Institute of Electrical and Electronics Engineers</h1>
		<h2 class = "subtitle is-4">Become a part of our vibrant community</h2>

		<div class="landing-photo"> 
				<img src="images/cover.jpg" alt="Cover photo">
		</div>

	</main>

	<footer class="footer-landing">
		© 2019 Institute of Electrical and Electronics Engineers
	</footer>

	<?php include "inc/is-active.inc";?>

</body>

</html>