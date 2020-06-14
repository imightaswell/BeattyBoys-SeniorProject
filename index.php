<?php

session_start(); 

if (isset($_GET['logout'])) { 
	session_destroy(); 
	unset($_SESSION['username']); 
	header("location: login.php"); 
} 
?> 
<!DOCTYPE html> 
<html> 

<head lang="en">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, inital-scale=1">

	<title>Beatty Boyz Fitness</title>
	<link rel="stylesheet" href="css/css_index.css"/>
</head>  

<body>

	<header class="fix">
		<video src="img/indexbg.mp4" class="vid-bg" autoplay loop muted></video>
	<div class="nav-area">
		<!-- Cropped off code -->
<div class ="blackbar">
	</div>
	<div class="main">
			<div class="logo">
				<a href="index.php">
				<img src="img/logo2.png"></img>
				</a>
			</div>
			<ul>
				<li><a href="#">About Us</a></li>
			</ul>
		</div>

	<div class ="banner-text">
		<?php if (!isset($_SESSION['username'])) : ?>
			<div>
			<h2>WELCOME TO OUR FITNESS WEBPAGE</h2>
				<p>Let's get started</p>
			<div class="button">
				<a href="login.php" class="btn">Login</a>
				<a href="register.php" class="btn">Register</a>
			
			</div>
		</div>
		<?php endif ?>
	</div>

<div>  
	<?php if (isset($_SESSION['username'])) : ?> 
		<div class="banner-text">
			<h3>WELCOME,</h3>
			<h4>The clock is ticking.</h4>
			<h5>Are you becoming the person you want to be?</h5>
		</div>

		<p class= Username><strong><?php echo $_SESSION['username']; ?></strong></p> 
		<a href="index.php?logout='1'" class="logout">Logout</a>


		<div class="buttonLOGIN">

		<figure class="snip1321"><img src="img/food.jpeg" alt="food"/>
		  <figcaption><ion-icon name="heart"></ion-icon>
		    <h4>Caloric Intake</h4>
		    <h2>stuff</h2>
		  </figcaption><a href="calories.php"></a>
		</figure>

			<a href="calories.php" class="btnLOGIN">Caloric Intake & Macronutrients</a> 
			<a href="weightlog.php" class="btnLOGIN">Weight Log</a> 
			<a href="routines.php" class="btnLOGIN">Workout Routines</a>  
		</div>
	<?php endif ?>
</div> 
<script src="https://unpkg.com/ionicons@5.0.0/dist/ionicons.js"></script>
</header>
</body> 
</html> 
