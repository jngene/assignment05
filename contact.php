<?php 
$currentPage = "IEEE ・ Contact Us";
include "inc/head.inc";
?>
<body>
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
						<a href="contact.php" class="navbar-item is-active">Contact Us</a>
					</div>
				</div>
			</div>
		</nav>
	<figure class = "box1">
			<img src="images/ieee-experience.jpg" alt="IEEE header picture">
	</figure>
	
	<h1>Contact Us</h1>
	<p>If you want to become a member or you have any questions about IEEE, please fill the form below. We will get back to you as soon as we can.</p>

	<div id="contact-form-wrapper">
		<form method="post" action="#" id="contact-form">

				<div class="field">
					<label class="label" for="name">Name</label>
					<div class="control">
					  <input class="input" type="text" name="name" id="name">
					</div>
				</div>
				<div class="field">
					<label class="label" for="email">Email</label>
					<div class="control">
					  <input class="input" type="email" name="email" id="email">
					</div>
				</div>
				<div class="field">
					<label class="label">Message</label>
					<div class="control">
					  <textarea class="textarea" name="query" id="query" placeholder="What can we help you with?"></textarea>
					</div>
				</div>	  
				<div class="field is-grouped">
					<div class="control">
					  <button class="button is-link" type="submit" name="submit">Submit</button>
					</div>
				</div>

		</form>

		
	</div>

	<script src="https://code.jquery.com/jquery-3.4.1.js"></script>
	<script>
		$("#contact-form").submit(function(e) {
			var formData = $("#contact-form").serialize();
			$.ajax({
				type: 'POST',
				url: "new.php",
				data: formData,
				success: function(data){
					$("#contact-form-wrapper").html("Thank you for contacting us!");
				}
			});
			e.preventDefault();
		});
	</script>
	
	<script>
		(function () {
			var burger = document.querySelector('.burger');
			var nav = document.querySelector('#' + burger.dataset.target);
			burger.addEventListener('click', function () {
				burger.classList.toggle('is-active');
				nav.classList.toggle('is-active');
			});
		})();
	</script>

</body>

</html>
