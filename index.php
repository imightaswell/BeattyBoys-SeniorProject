<?php

// Starting the session, to use and 
// store data in session variable 
session_start(); 

// If the session variable is empty, this 
// means the user is yet to login 
// User will be sent to 'login.php' page 
// to allow the user to login 
 

// Logout button will destroy the session, and 
// will unset the session variables 
// User will be headed to 'login.php' 
// after loggin out 
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
	<title>Beatty Boyz Fitness</title>
	<link rel="stylesheet" href=""/>
</head>
<body>

	<div>
		<img class = "logo" src="img/logo1.png">
		<ul>
			<li class="active"><a href="index.php">Home</a></li>
			<li><a href="">About Us</a></li>
		</ul>
	</div> 

	<div>
		<?php if (!isset($_SESSION['username'])) : ?>
			<div>

				<h1>WELCOME TO OUR FITNESS WEBPAGE</h1>
				<h2>Let's get started</h2>
			
				<a href="login.php" class="btn">Login</a>
				<a href="register.php" class="btn">Register</a>
			
			</div>
		<?php endif ?>
	</div>

	<div>  
		<?php if (isset($_SESSION['username'])) : ?> 

			<p>Signed in as,<strong><?php echo $_SESSION['username']; ?></strong></p> 
			<a href="index.php?logout='1'">Logout</a>

			<a href="calories.php">Caloric Intake & Macronutrients</a>
			<a href="weightlog.php">Weight Log</a>
			<a href="routines.php">Workout Routines</a>
		<?php endif ?> 
	</div> 
</body> 
</html> 
