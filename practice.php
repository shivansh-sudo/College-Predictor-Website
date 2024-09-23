<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="practice.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link rel="icon" type="x-icon" href="jagran_logo1.jpg">
	<link href="https://fonts.googleapis.com/css?family=Quicksand&display=swap" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<title>College Sikhsha</title>
</head>
<body>
	<nav class="navbar sticky-top navbar-expand-sm navbar-dark bg-dark">
		<a class="navbar-brand" href="Home.php">
    	<img src="jagran_logo1.jpg" width="30" height="30" class="d-inline-block align-top" alt=""> College Sikhsha
  		</a>
  <!-- Links -->
  		<ul class="navbar-nav ml-auto">
    		<li class="nav-item">
      			<a class="nav-link" href="Home.php">Home</a>
    		</li>
    		<li class="nav-item active">
      			<a class="nav-link" href="pratice.php">About Us</a>
    		</li>
    		<li class="nav-item">
      			<a class="nav-link" href="login.php">Not <?php
      			if(isset($_SESSION['username']))
      				{
      					echo $_SESSION['username'];
      				}
      			?>? Logout</a>
    		</li>
  		</ul>
	</nav>

	<div class="background">
		<i class="fa fa-quote-left"></i><p>Nothing in this world can take the place of persistence. Talent will not: nothing is more common than unsuccessful men with talent. Genius will not; unrewarded genius is almost a proverb. Education will not: the world is full of educated derelicts. Persistence and determination alone are omnipotent.</p>
	</div>
	<div class="background">
		<h2>About Us</h2>
		<p>Hey there! Welcome to college predictor, where finding your dream college is as easy as pie. We get it – choosing the right college can feel like a maze. That's why we're here, your sidekick in the quest for the perfect academic fit.<br>

		<h4>Our Vision</h4>

		Picture this: a world where every student has a shot at the college that fits them like a glove. We're all about making education choices a breeze, unlocking doors to awesome possibilities and setting you up for success.<br>

		<h4>Who We Are</h4>

		We're a bunch of education geeks, tech whizzes, and just all-around cool folks. Our mission? To shake up how students like you pick their dream college. We've got a mix of brains, backgrounds, and big ideas to make this happen
		</p>
		<p>College predictor is designed to help students to get their college.
			Lets face it, we all have been in same shoes, where we would be running through various sites, educators to check where do we stand, to make this problem a bit simpler, we have come up with this predictior.We hope this will give you an idea about where you should be headed forward. 		
		</p>

		<p>Our website takes into account the various types of engineering exams and their result. Upon analysis and research for over hundreds of exams we have standardized the predictor, note that the trends followed each year are different and may vary, taking into those data as input, our website is regularly updated and maintained, Students look around and get tired from looking around without any potential solution. We hope this site might be a little helpful.</p>

	</div>
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</body>
</html>
