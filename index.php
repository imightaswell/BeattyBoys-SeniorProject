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
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.0.0/animate.min.css"/>
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
		<div class="animate_animated animate__fadeInDown banner-text">
			<h3 class ="animate__animated animate__fade">WELCOME,</h3>
			<h4 class ="animate__animated animate__fadeInDown">The clock is ticking.</h4>
			<h5 class ="animate__animated animate__fadeInDown">Are you becoming the person you want to be?</h5>
		</div>

		<p class="Username"><strong class="animate__animated animate__fadeInDown"><?php echo $_SESSION['username']; ?></strong></p> 
		<a href="index.php?logout='1'" class="logout">Logout</a>


		<div class="buttonLOGIN">

			<figure class="animate__animated animate__fadeIn snip1321"><img src="img/food.jpeg" alt="food"/>
			  <figcaption><ion-icon name="restaurant-sharp"></ion-icon>
			    <h4>stuff</h4>
			    <h2>Caloric Intake</h2>
			  </figcaption><a href="calories.php"></a>
			</figure>

			<figure class="animate__animated animate__fadeIn snip1321"><img src="img/weightlog.jpg" alt="weight log"/>
			  <figcaption><ion-icon name="trending-up-sharp"></ion-icon>
			    <h4>Stuff</h4>
			    <h2>Weight Log</h2>
			  </figcaption><a href="weightlog.php"></a>
			</figure>

			<figure class="animate__animated animate__fadeIn snip1321"><img src="img/workoutroutine.png" alt="workoutroutine"/>
			  <figcaption><ion-icon name="barbell-sharp"></ion-icon>
			    <h4>Stuff</h4>
			    <h2>Workout Routine</h2>
			  </figcaption><a href="routines.php"></a>
			</figure>

		</div>
	<?php endif ?>
</div> 
<script src="https://unpkg.com/ionicons@5.0.0/dist/ionicons.js"></script>
</header>
</body> 
</html> 
